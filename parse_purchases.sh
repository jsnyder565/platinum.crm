#!/bin/bash

# Check if a CSV file is provided as an argument
if [ $# -eq 0 ]; then
  echo "Please provide a CSV file as an argument."
  exit 1
fi

csv_file="$1"

# Skip the header row
tail -n +2 "$csv_file" | while IFS=, read customer_email purchasable price quantity total date; do
  echo "
  \$c = Customer::where('email', '$customer_email')->firstOrFail();
  \$p = [
      'customer_id' => \$c->id,
      'purchasable' => '$purchasable',
      'price' => $price,
      'quantity' => $quantity,
      'total' => $total,
      'date' => '$date',
  ];
  if (\$this->validatePurchase(\$p)) Purchase::create(\$p);"
done