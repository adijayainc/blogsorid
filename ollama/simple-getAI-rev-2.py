import requests
import json

url = 'http://192.168.0.15:11434/api/generate'
data = {
    'model': 'tinyllama',
    'prompt': 'What is water made of?'
}
headers = {'Content-Type': 'application/json'}

response = requests.post(url, headers=headers, data=json.dumps(data))

# Print raw response for debugging
print("Raw Response:", response.text)

# Attempt to parse the JSON response
try:
    response_data = response.json()
    print("Parsed Response:", response_data)
except json.JSONDecodeError as e:
    print("Failed to decode JSON:", e)
    print("Response text:", response.text)  # This will help identify issues in the raw output

