import requests
import json
import yaml

url = 'http://192.168.0.15:11434/api/generate'
data = {
    'model': 'tinyllama',
    'prompt': 'What is water made of?'
}
headers = {'Content-Type': 'application/json'}

response = requests.post(url, headers=headers, data=json.dumps(data))

# Check if the request was successful
if response.status_code == 200:
    # Parse and print the YAML response
    try:
        response_data = yaml.safe_load(response.text)
        print("Response:", response_data)
    except yaml.YAMLError as e:
        print("Failed to parse YAML:", e)
else:
    print(f"Error: {response.status_code} - {response.text}")

