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
      'purchase_date_string' => '$date',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '$date'),
  ];
  if (\$this->validatePurchase(\$p)) {
    \$p = Purchase::create(\$p);
    \$p->purchase_date = DateTime::createFromFormat('Y-m-d', '$date');
    \$p->purchase_date_string = '$date';
    \$p->save();
  }"
done