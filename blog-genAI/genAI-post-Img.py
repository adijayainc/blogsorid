import os
import sys
from datetime import datetime
from groq import Groq
import requests
import yaml

# Load data from data.txt into a dictionary
data_dict = {}
with open("data.txt", "r") as file:
    for line in file:
        line = line.strip()  # Remove leading/trailing whitespace
        if "=" in line:
            key, value = line.split("=", 1)  # Split on the first '='
            data_dict[key] = value

# Access and use the data as variables
tema = data_dict.get("DIR")
judul = data_dict.get("TITLE")
jelas = data_dict.get("DESC")
mod = data_dict.get("MODEL")
sistem = data_dict.get("SYSTEM")

# Get the current date and time
now = datetime.now()
formatted_now = now.strftime("%d-%m-%Y %H:%M:%S")

# Create the directory if it doesn't exist
new_dir_path = f"/var/www/blogsorid/user/pages/blog/{tema}"
try:
    os.makedirs(new_dir_path, exist_ok=True)
except OSError as e:
    print(f"Error creating directory: {e}")

# Save the original stdout
original_stdout = sys.stdout

# Open the post.md file for writing
with open(os.path.join(new_dir_path, 'post.md'), 'w') as f:
    # Redirect stdout to the file
    sys.stdout = f

    # Print metadata to the Markdown file
    print("---")
    print("layout: post")
    print(f"title: {judul}")
    print(f"description: {jelas}")
    print(f"date: {formatted_now}")
    print(f"Publish date: {formatted_now}")
    print(f"image: {tema}.jpg")
    
    print("taxonomy:")
    print("  tag:")
    print("  - genAI")
    print("  - groq")
    print(f"  - {mod}")
    print("---")

    # --- Groq Code for Text Completion ---
    client = Groq()
    completion = client.chat.completions.create(
        model=f"{mod}",
        messages=[
            {"role": "system", "content": f"{sistem}"},
            {"role": "user", "content": f"{jelas}"}
        ],
        temperature=1,
        max_tokens=1024,
        top_p=1,
        stream=True,
        stop=None,
    )

    # Iterate over completion chunks and print to Markdown file
    for chunk in completion:
        if hasattr(chunk, 'choices') and hasattr(chunk.choices[0], 'delta') and hasattr(chunk.choices[0].delta, 'content'):
            print(chunk.choices[0].delta.content or "", end="")

# Reset stdout back to original AFTER writing Groq output
sys.stdout = original_stdout

# --- Generate AI Image Using Groq's Llama Vision Model ---
def generate_image(prompt):
    url = "https://api.groq.com/generate"  # Ensure this is the correct endpoint for image generation
    headers = {
        "Authorization": f"Bearer {os.getenv('GROQ_API_KEY')}",  # Make sure to set your API key as an environment variable
        "Content-Type": "application/json"
    }
    
    data = {
        "prompt": prompt,
        "num_images": 1  # Adjust this if you want multiple images
    }
    
    response = requests.post(url, json=data, headers=headers)
    
    if response.status_code == 200:
        image_data = response.json()["images"][0]  # Accessing the first generated image
        with open(os.path.join(new_dir_path, f"{tema}.jpg"), "wb") as img_file:
            img_file.write(image_data)  # Write the image bytes to a file
        print("Image generated successfully!")
    else:
        print("Failed to generate image:", response.text)

# Call the function to generate an image based on description (jelas)
generate_image(jelas)
