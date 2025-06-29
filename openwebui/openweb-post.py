import os
import re
import sys
import requests
import json
from datetime import datetime

# Read data from data.txt
data_dict = {}
with open("data.txt", "r") as file:
    for line in file:
        line = line.strip()
        if "=" in line:
            key, value = line.split("=", 1)
            data_dict[key] = value

# Extract variables from the data file
temaold = data_dict.get("DIROLD")
tema = data_dict.get("DIR")
judul = data_dict.get("TITLE")
jelas = data_dict.get("DESC")
mod = data_dict.get("MODEL")
sistem = data_dict.get("SYSTEM")
# Extract variables from OS env
token = os.environ["TOKEN"]
openweb = os.environ["OPENWEB"]
print(openweb)
print(token)

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
    sys.stdout = f
    print("---")
    print("layout: ", "post")
    print("title: ", f"{judul}")
    print("description: ", f"{jelas}")
    print("date: ", formatted_now)
    print("Publish date: ", formatted_now)
    print("image: ", f"{tema}.jpg")
    print("taxonomy:")
    print("  tag:")
    print("  - genAI")
    print("  - openwebui")
    print("  -", f"{mod}")
    print("---")

    # Call OpenWebUI API
    url = f'{openweb}'
    headers = {
        'Authorization': f'Bearer {token}',
        'Content-Type': 'application/json'
    }
    data = {
        "model": mod,
        "messages": [
            {"role": "system", "content": sistem},
            {"role": "user", "content": jelas}
        ],
        "temperature": 1,
        "max_tokens": 1024,
        "top_p": 1,
        "stream": True
    }
    
    try:
        response = requests.post(url, headers=headers, json=data, stream=True)
        
        if response.status_code != 200:
            print(f"API Error {response.status_code}: {response.text}")
        else:
            for line in response.iter_lines():
                if line:
                    decoded_line = line.decode('utf-8').strip()
                    if decoded_line == "data: [DONE]":
                        continue
                    if decoded_line.startswith('data: '):
                        try:
                            chunk = json.loads(decoded_line[6:])
                            if 'choices' in chunk and chunk['choices']:
                                content = chunk['choices'][0]['delta'].get('content', '')
                                if content:
                                    print(content, end="", flush=True)
                        except json.JSONDecodeError as e:
                            print(f"JSON Decode Error: {e} for line: {decoded_line}")
    except requests.exceptions.RequestException as e:
        print(f"Request failed: {str(e)}")

# Reset stdout back to original AFTER writing OpenWebUI output
sys.stdout = original_stdout
# add image 
# URL for a random image from Unsplash
url = "https://picsum.photos/800/600"

# Send request to get the image
response = requests.get(url)

# Save the image
if response.status_code == 200:
    with open(f"/var/www/blogsorid/user/pages/blog/{tema}/{tema}.jpg", "wb") as file:
        file.write(response.content)
    print(f"/var/www/blogsorid/user/pages/blog/{tema}/{tema}.jpg")
else:
    print("Failed to download image")
#
# replace file 
#
#
#import re

#def replace_text_with_regex(file_path, pattern, replacement):
#    try:
#        with open(file_path, 'r', encoding='utf-8') as file:
#            file_data = file.read()

        # Ganti semua yang cocok dengan pattern regex
#        file_data_new = re.sub(pattern, replacement, file_data)

#        with open(file_path, 'w', encoding='utf-8') as file:
#            file.write(file_data_new)

#        print("Teks berhasil diganti dengan regex.")
#    except Exception as e:
#        print(f"Terjadi kesalahan: {e}")

#if __name__ == "__main__":
#    file_path = '/var/www/blogsorid/user/config/system.yaml'
#    pattern = r'/blog/[^ \n]+'  # Contoh: ganti semua path yang dimulai dengan /blog/ sampai spasi atau newline
#    replacement = f'/blog/{tema}\''

#   replace_text_with_regex(file_path, pattern, replacement)

