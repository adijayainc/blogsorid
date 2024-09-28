import requests
import logging

# Set up logging
logging.basicConfig(level=logging.INFO)

def process_response(response):
    try:
        # Log the entire response for debugging purposes
        logging.debug("Full Response: %s", response)

        # Check if 'message' key exists in the response
        if 'message' in response:
            # Check if 'content' key exists in the 'message' dictionary
            if 'content' in response['message']:
                logging.info("Response contains 'message' and 'content' keys.")
                return response['message']['content']
            else:
                logging.warning("The 'content' key does not exist in the 'message' dictionary.")
                return None
        else:
            logging.warning("The 'message' key does not exist in the response.")
            return None
    except KeyError as ke:
        logging.error(f"KeyError: {ke}")
        return None

try:
    # Make the POST request to Ollama
    response = requests.post('http://192.168.0.15:11434/v1/chat/completions', 
                              headers={'Content-Type': 'application/json'}, 
                              json={
                                  'model': 'tinyllama',
                                  'messages': [
                                      {'role': 'system', 'content': 'You are a helpful assistant.'},
                                      {'role': 'user', 'content': 'Hello'}
                                  ]
                              })

    # Check if the request was successful
    if response.status_code == 200:
        # Process the response
        result = process_response(response.json())
        
        if result is not None:
            print(result)
        else:
            print("No valid response received.")
    else:
        logging.error(f"Request failed with status code {response.status_code}")
except requests.exceptions.RequestException as e:
    logging.error(f"Request failed: {e}")
