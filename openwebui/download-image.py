import requests

# URL for a random image from Unsplash
url = "https://picsum.photos/800/600"

# Send request to get the image
response = requests.get(url)

# Save the image
if response.status_code == 200:
    with open("random_image.jpg", "wb") as file:
        file.write(response.content)
    print("Image downloaded as random_image.jpg")
else:
    print("Failed to download image")
