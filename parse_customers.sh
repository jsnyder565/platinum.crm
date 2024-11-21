#!/bin/bash

# Check if a CSV file is provided as an argument
if [ $# -eq 0 ]; then
  echo "Please provide a CSV file as an argument."
  exit 1
fi

csv_file="$1"

# Skip the header row
tail -n +2 "$csv_file" | while IFS=, read name email phone; do
  echo "
  \$c = [
      'name' => '$name',
      'email' => '$email',
      'phone_number' => '$phone',
      'loyalty_points' => 0,
  ];
  if (validateCustomer(\$c)) Customer::create(\$c);
  "
done