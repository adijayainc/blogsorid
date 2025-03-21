import requests
import json

def chat_with_model(token):
    url = 'http://adiai.adijaya.com:3000/api/chat/completions'
    headers = {
        'Authorization': f'Bearer sk-13c9780d6f63429ebd3dd9f4ee06b186',
        'Content-Type': 'application/json'
    }
    
    data = {
            "model": "gemma3:1b",
        "messages": [
            {
                "role": "user",
                "content": "tell history of Indonesia from majapahit until today, make 1500 words or more"
            }
        ]
    }
    
    # Convert the data dictionary to a JSON string
    response = requests.post(url, headers=headers, json=data)  # Use json= instead of data=
    
    if response.status_code == 200:
        return response.json()  # Return the JSON response if successful
    else:
        print(f"Error: {response.status_code} - {response.text}")
        return None

# Example usage
if __name__ == "__main__":
    TOKEN = "YOUR_API_TOKEN"  # Replace with your actual API token
    response = chat_with_model(TOKEN)
    
    if response:
        print(json.dumps(response, indent=4))  # Pretty-print the JSON response

