
import requests
import json

url = 'http://192.168.0.15:11434/api/generate'
data = {
    'model': 'tinyllama',
    'prompt': 'What is water made of?'
}
headers = {'Content-Type': 'application/json'}

response = requests.post(url, headers=headers, data=json.dumps(data))
if response.status_code == 200:
    print(response.json())
else:
    print(f"Error: {response.status_code}")

