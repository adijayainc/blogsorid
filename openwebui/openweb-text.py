import requests
import json

def chat_with_model_stream(token):
    url = 'http://adiai.adijaya.com:3000/api/chat/completions'
    headers = {
        'Authorization': f'Bearer {token}',
        'Content-Type': 'application/json'
    }
    
    data = {
        "model": "gemma3:1b",
        "messages": [
            {"role": "user", "content": "Tell the story of Rome until now, with their army force, 100 words."}
        ],
        "stream": True
    }
    
    try:
        response = requests.post(url, headers=headers, json=data, stream=True)
        
        # Check for HTTP errors
        if response.status_code != 200:
            print(f"API Error {response.status_code}: {response.text}")
            return
        
        # Verify response format
        content_type = response.headers.get('Content-Type', '')
        if 'application/json' not in content_type and 'text/event-stream' not in content_type:
            print("Error: Unexpected response format.")
            print(f"Raw Response: {response.text}")
            return
        
        # Process streaming response
        for line in response.iter_lines():
            if line:
                decoded_line = line.decode('utf-8').strip()
                
                # Ignore the [DONE] message
                if decoded_line == "data: [DONE]":
                    continue
                
                if decoded_line.startswith('data: '):
                    try:
                        chunk = json.loads(decoded_line[6:])  # Remove 'data: ' prefix
                        if 'choices' in chunk and chunk['choices']:
                            content = chunk['choices'][0]['delta'].get('content', '')
                            if content:
                                print(content, end="", flush=True)
                    except json.JSONDecodeError as e:
                        print(f"JSON Decode Error: {e} for line: {decoded_line}")
    
    except requests.exceptions.RequestException as e:
        print(f"Request failed: {str(e)}")
        
# Example usage
if __name__ == "__main__":
    TOKEN = ""  # Replace with your actual token
    chat_with_model_stream(TOKEN)
