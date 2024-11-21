#!/bin/bash

function create_gist() {
  local files="$1"
  local description="$2"

  local body='{"description": "'"$description"'", "public": true, "files": {'
  for file in $files; do
    local file_content=$(cat "$file")
    body+="\"${file}\": { \"content\": \"$file_content\" },"
  done
  body="${body%?}"  # Remove the trailing comma
  body+="}}"
  body=$(echo "$body" | sed 's/"/\\"/g')

  echo $body

  curl -v -X POST -H "Authorization: token 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" \
      -H "Accept: application/vnd.github+json" \
      -d "$body" https://api.github.com/gists
}

# Get the list of files from command-line arguments
files=("$@")

# Create a description for the Gist
description="A collection of files"

# Call the function to create the Gist
create_gist "${files[@]}" "$description"