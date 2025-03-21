import requests

def get_content_from_openwebui(api_key, endpoint):
    url = f"http://adiai.adijaya.com:3000/api/{endpoint}"
    headers = {
        'Authorization': f'Bearer {TOKEN}',
        'Content-Type': 'application/json'
    }
    
    response = requests.get(url, headers=headers)
    
    if response.status_code == 200:
        return response.json()
    else:
        print(f"Error: {response.status_code} - {response.text}")
        return None

# Example usage
if __name__ == "__main__":
    API_KEY = "YOUR_API_KEY"  # Replace with your actual API key
    endpoint = "models"  # Change this to the desired API endpoint
    content = get_content_from_openwebui(API_KEY, endpoint)
    
    if content:
        print(content)

