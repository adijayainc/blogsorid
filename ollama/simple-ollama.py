import requests
import json

def generate_response(prompt):
    # Define the URL for the Ollama API
    url = "http://192.168.0.15:11434/api/generate"
    
    # Prepare headers and data for the request
    headers = {
        "Content-Type": "application/json"
    }
    
    data = {
        "model": "adijayainc/pebbles",  # Specify your model here
        "prompt": prompt,
        "stream": False  # Set to True if you want streaming responses
    }
    
    # Send a POST request to the API
    response = requests.post(url, headers=headers, data=json.dumps(data))
    
    # Check if the request was successful
    if response.status_code == 200:
        # Extract and return the response text from JSON
        return response.json().get('response', 'No response found')
    else:
        return f"Error: {response.status_code} - {response.text}"

if __name__ == "__main__":
    user_prompt = "What is water made of?"  # Example prompt
    result = generate_response(user_prompt)
    print("Response from Ollama:", result)

