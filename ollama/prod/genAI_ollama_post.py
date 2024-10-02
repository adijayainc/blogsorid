import os
import sys
from datetime import datetime
from groq import Groq
from ollama_python.endpoints import GenerateAPI

import yaml

# Write to a YAML file
# with open('output.yaml', 'w') as f:

data_dict = {}
with open("data.txt", "r") as file:
    for line in file:
        line = line.strip()  # Remove leading/trailing whitespace
        if "=" in line:
            key, value = line.split("=", 1)  # Split on the first '='
            data_dict[key] = value

# 2. Access and use the data as variables
tema = data_dict.get("DIR")
judul = data_dict.get("TITLE")  # Convert to integer if needed
jelas = data_dict.get("DESC")  # Convert to integer if needed
mod = data_dict.get("MODEL")  # Convert to integer if needed
sistem = data_dict.get("SYSTEM")  # Convert to integer if needed
#city = data_dict.get("CITY")



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

with open(os.path.join(new_dir_path,'post.md'), 'w') as f:
    # Redirect stdout to the file
    sys.stdout = f

 
 # Print the current date and time
    # yaml.dump(data, f, allow_unicode=True)
    print("---")
    print("layout: ", "post")

    print("title: ",f"{judul}")
    print("description: ",f"{jelas}")
    print("date: ", formatted_now)
    print("Publish date: ", formatted_now)
    print("image: ","picture-38.jpg")
    
    print("taxonomy:")
    print("  tag:")
    print("  - genAI")
    print("  - ollama")
    print("  -",f"{mod}")
    print("---")
    
    # print(f"{sistem}")
    #print(f"{judul}")

    # Print a message to the file
    #print("Hello, World!")
    # print("This message will be written to a file.")

    # Print the date in a formatted way
    # print("Date:", datetime.now())

    # --- Groq Code (keep within the 'with' block) ---
    api = GenerateAPI(base_url="http://192.168.0.15:11434/api", model="tinydolphin")

    def get_response(prompt):
    # Send the prompt to the Ollama API and handle streaming response
        try:
        # Generate response without num_tokens
           for response in api.generate(prompt=prompt, stream=True):
            print(response.response, end='', flush=True)
        except Exception as e:
           print(f"Error occurred: {e}")

    if __name__ == "__main__":
        user_prompt = f'{jelas}'
    get_response(user_prompt)

# Reset stdout back to original AFTER writing Groq output
sys.stdout = original_stdout

