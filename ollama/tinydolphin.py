import os
import sys
from datetime import datetime
import requests
import json
import yaml

# Read data from data.txt into a dictionary
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
os.makedirs(new_dir_path, exist_ok=True)

# Prepare the request to the Ollama server
url = 'http://192.168.0.15:11434/api/generate'
request_data = {
    'model': mod,  # Use the model from data.txt
    'prompt': jelas  # Use the description as the prompt
}

# Send a POST request to the Ollama API
response = requests.post(url, headers={'Content-Type': 'application/json'}, data=json.dumps(request_data))

# Get raw response text
raw_response = response.text.strip()

# Print raw response for debugging (optional)
print("Raw Response:", raw_response)

# Attempt to parse JSON response and handle multiple JSON objects if necessary
try:
    # Split by '}{' to separate individual JSON objects (basic approach)
    json_objects = raw_response.split('}{')
    
    # Add back the curly braces for each object
    json_objects = ['{' + obj + ('}' if i == len(json_objects) - 1 else '}') for i, obj in enumerate(json_objects)]

    # Parse each JSON object and collect them into a list
    parsed_responses = []
    for json_str in json_objects:
        try:
            parsed_responses.append(json.loads(json_str))
        except json.JSONDecodeError:
            print(f"Failed to decode JSON: {json_str}")

    # Save output in YAML format to post.md file
    with open(os.path.join(new_dir_path, 'post.md'), 'w') as f:
        yaml.dump(parsed_responses, f, allow_unicode=True)

    print("YAML response saved to post.md")

except Exception as e:
    print("An error occurred:", str(e))
