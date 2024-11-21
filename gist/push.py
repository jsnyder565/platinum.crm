import base64
import os

def create_gist(files, description):
    """Creates a GitHub Gist with the specified files and description.

    Args:
        files: A list of file names.
        description: The description for the Gist.

    Returns:
        The URL of the created Gist.
    """

    token = "YOUR_PERSONAL_ACCESS_TOKEN"  # Replace with your token
    url = "https://api.github.com/gists"

    data = {
        "description": description,
        "public": True,
        "files": {}
    }

    for file in files:
        with open(file, "rb") as f:
            content = base64.b64encode(f.read()).decode('utf-8')
        data['files'][file] = {'content': content}

    headers = {'Authorization': 'token {token}'}
    response = requests.post(url, json=data, headers=headers)

    if response.status_code == 201:
        return response.json()['html_url']
    else:
        print("Error creating Gist: {response.text}")
        return None

# Example usage:
files = ['index.php']

gist_url = create_gist(files, "My Gist")
print(gist_url)