import csv
from datetime import datetime
from collections import defaultdict

def parse_csv_and_calculate(filename):
    """Parses the CSV file and calculates required metrics.

    Args:
        filename: The name of the CSV file.

    Returns:
        A tuple containing:
        - Total number of rows
        - Number of distinct customer emails
        - A dictionary of customer emails and their total purchase amount
        - A dictionary of customer emails and their loyalty points
        - A list of tuples, each containing a month, total spend, and points awarded
    """

    total_rows = 0
    distinct_emails = set()
    customer_totals = defaultdict(float)
    customer_loyalty_points = defaultdict(int)
    customer_total_items = defaultdict(int)
    monthly_totals = defaultdict(lambda: {'total_spend': 0, 'total_items': 0, 'points_awarded': 0})
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

            customer_totals[customer_email] += total_amount

            if purchase_date >= cutoff_date:
                customer_total_items[customer_email] += quantity
                customer_loyalty_points[customer_email] += customer_total_items[customer_email] // 10 + total_amount // 10

                month_year = purchase_date.strftime('%Y-%m')
                monthly_totals[month_year]['total_spend'] += total_amount
                monthly_totals[month_year]['total_items'] += quantity

    for key,value in monthly_totals.items():
        a = value['total_spend'] // 10 + value['total_items'] // 10
        monthly_totals[key]['points_awarded'] += a

    # Sort monthly totals by month in ascending order
    monthly_totals = sorted(monthly_totals.items(), key=lambda x: datetime.strptime(x[0], '%Y-%m'))

    return total_rows, len(distinct_emails), customer_totals, customer_loyalty_points, monthly_totals

# Example usage:
filename = 'purchase_history.csv'
total_rows, num_customers, customer_totals, customer_loyalty_points, monthly_totals = parse_csv_and_calculate(filename)

print("Total rows:", total_rows)
print("Number of distinct customers:", num_customers)

print("\nCustomer Totals:")
for customer, total in customer_totals.items():
    print(f"{customer:<30} ${total:>10.2f}")

print("\nCustomer Loyalty Points:")
for customer, points in customer_loyalty_points.items():
    print(f"{customer:<30} {points:>10}")

print("\nMonthly Totals:")
for month_year, totals in monthly_totals:
    print(f"{month_year:<10} ${totals['total_spend']:>10.2f} {totals['points_awarded']:>10}")