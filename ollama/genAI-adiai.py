import ollama

# Create a chat interaction with the Mistral model
response = ollama.chat(model='mistral', messages=[
    {'role': 'user', 'content': 'Why is the sky blue?'}
])

# Print the response from the model
print(response['message']['content'])

