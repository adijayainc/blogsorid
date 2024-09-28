
import requests
import json

# URL for the Ollama API
url = 'http://192.168.0.15:11434/api/generate'

# Prepare your request data
data = {
    'model': 'tinyllama',  # Choose the model you want to use
    'prompt': 'why the world is flat?'  # Your question or prompt here
}

# Set headers for the request
headers = {'Content-Type': 'application/json'}

# Send a POST request to the Ollama API
response = requests.post(url, headers=headers, data=json.dumps(data))

# Check if the request was successful
if response.status_code == 200:
    # Parse and print the JSON response in a more readable format
    response_data = response.json()

    print("Model:", response_data['model'])
    print("Created At:", response_data['created_at'])

    # Extract and print the main response text
    main_response = response_data['response']

    # Remove any newline characters for better readability
    main_response = main_response.replace('\n', ' ')

    print("Response:", main_response)

else:
    print(f"Error: {response.status_code} - {response.text}")

