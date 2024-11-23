import csv
from datetime import datetime

def parse_csv_and_calculate(filename):
    """Parses the CSV file and calculates the required metrics.

    Args:
        filename: The name of the CSV file.

    Returns:
        A tuple containing:
            - Total number of rows
            - Number of distinct customer emails
            - A dictionary of customer emails and their total purchase amount
            - A dictionary of customer emails and their loyalty points
    """

    total_rows = 0
    distinct_emails = set()
    customer_totals = {}
    customer_loyalty_points = {}
    customer_total_items = {}
    cutoff_date = datetime(2022, 1, 1)

    with open(filename, 'r') as csvfile:
        reader = csv.DictReader(csvfile)
        for row in reader:
            total_rows += 1
            distinct_emails.add(row['customer_email'])

            customer_email = row['customer_email']
            purchase_date = datetime.strptime(row['date'], '%Y-%m-%d')
            quantity = int(row['quantity'])
            total_amount = float(row['total'])

            if customer_email not in customer_totals:
                customer_totals[customer_email] = 0
            customer_totals[customer_email] += total_amount

            if purchase_date >= cutoff_date:
                if customer_email not in customer_loyalty_points:
                    customer_loyalty_points[customer_email] = 0
                    customer_total_items[customer_email] = 0
                customer_total_items[customer_email] += quantity
                customer_loyalty_points[customer_email] += customer_total_items[customer_email] // 10 + total_amount // 10

    return total_rows, len(distinct_emails), customer_totals, customer_loyalty_points

# Example usage:
filename = 'purchase_history.csv'
total_rows, num_customers, customer_totals, customer_loyalty_points = parse_csv_and_calculate(filename)

print("Total rows:", total_rows)
print("Number of distinct customers:", num_customers)

for customer, total in customer_totals.items():
    print(f"Customer {customer} spent a total of ${total:.2f}")

for customer, points in customer_loyalty_points.items():
    print(f"Customer {customer} has {points} loyalty points")