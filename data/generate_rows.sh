#!/bin/bash
./parse_purchases.sh purchase_history.csv > purchases.php
./parse_customers.sh customers.csv > customers.php  
cat rows.header.php customers.php purchases.php > rows.php