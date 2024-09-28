import ollama

from ollama import Client
client = Client(host='http://192.168.0.15:11434')
response = client.chat(model='tinydolphin', messages=[
  {
    'role': 'user',
    'content': 'Why is the sky blue?',
  },
])
