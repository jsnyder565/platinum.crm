import csv
from datetime import datetime
from collections import defaultdict

class Month:
    def __init__(self):
        self.year = None
        self.month = None
        self.total_purchases = 0
        self.total_spent = 0
        self.point_dollars = 0
        self.point_items = 0
        self.loyalty_points = 0
        self.customers = set()

    def add_purchase(self, quantity, total, date, email):
        if not self.year:
            self.year = date.year
            self.month = date.month

        self.total_purchases += 1
        self.total_spent += total
        if date.year >= 2022:
            self.point_dollars += total
            self.point_items += quantity
        self.loyalty_points = self.point_dollars // 10 + self.point_items // 10 * 10
        self.customers.add(email)

def main():
    monthly_data = defaultdict(Month)

    with open('purchase_history.csv', 'r') as f:
        reader = csv.reader(f)
        header = next(reader)  # Read the header row

        # Find the indices of the relevant columns
        email_index = header.index('customer_email')
        quantity_index = header.index('quantity')
        total_index = header.index('total')
        date_index = header.index('date')

        for row in reader:
            email = row[email_index]
            quantity = int(row[quantity_index])
            total = float(row[total_index])
            date = datetime.strptime(row[date_index], '%Y-%m-%d')  # Adjust date format as needed

            month_year = date.strftime('%Y-%m')
            monthly_data[month_year].add_purchase(quantity, total, date, email)

    # Sort the months by year and month
    sorted_months = sorted(monthly_data.items(), key=lambda x: datetime.strptime(x[0], '%Y-%m'))

    # Print the header
    print("{:<10} {:<20} {:<15} {:<15} {:<15} {:<15} {:<20}".format(
        "Month", "Total Purchases", "Total Spent", "Point Dollars", "Point Items", "Loyalty Points", "Unique Customers"
    ))

    # Print monthly data in sorted order
    for month_year, month_data in sorted_months:
        total_spent_str = f"${month_data.total_spent:.2f}"
        point_dollars_str = f"${month_data.point_dollars:.2f}"
        unique_customers_str = str(len(month_data.customers))

        print(f"{month_year:<10} {month_data.total_purchases:>20} {total_spent_str:>15} {point_dollars_str:>15} {month_data.point_items:>15} {month_data.loyalty_points:>15} {unique_customers_str:>20}")

if __name__ == "__main__":
    main()