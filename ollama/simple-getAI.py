import requests
import json

# Define the URL for the Ollama API
url = 'http://localhost:11434/api/generate'

# Prepare the data payload
data = {
    'model': 'tinyllama',  # Specify the model you want to use
    'prompt': 'What is water made of?',  # Your prompt here
    'stream': False  # Set to True if you want streaming responses
}

# Set headers for the request
headers = {'Content-Type': 'application/json'}

# Send POST request to the Ollama API
response = requests.post(url, headers=headers, data=json.dumps(data))

# Check if the request was successful
if response.status_code == 200:
    # Parse and print the JSON response
    response_data = response.json()
    print("Response:", response_data)
else:
    print(f"Error: {response.status_code} - {response.text}")

