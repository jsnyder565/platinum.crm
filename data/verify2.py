import csv
from datetime import datetime

class Customer:
    def __init__(self, email):
        self.email = email
        self.dollars = 0
        self.point_items = 0
        self.point_dollars = 0
        self.points = 0

    def loyalty_points(self):
        return self.point_dollars // 10 + (self.point_items // 10)

    def add_purchase(self, quantity, total, date):
        self.dollars += total
        if date.year >= 2022:
            self.point_dollars += total
            self.point_items += quantity
            self.loyalty_points += quantity // 10 * 10 + total // 10
            month_year = date.strftime('%Y-%m')
            self.monthly_spending[month_year] = self.monthly_spending.get(month_year, 0) + total

def main():
    customers = {}
    with open('purchase_history.csv', 'r') as csvfile:
        reader = csv.DictReader(csvfile)
        for row in reader:
            quantity = row['quantity']
            total = row['total']
            email = row['customer_email']
            date_str = row['date']
            quantity = int(quantity)
            total = float(total)
            date = datetime.strptime(date_str, '%Y-%m-%d')  # Adjust format as needed

            if email not in customers:
                customers[email] = Customer(email)
            customers[email].add_purchase(quantity, total, date)

    # Print customer totals
    print("Customer Totals:")
    print("{:<30} {:<15} {:<15}".format("Email", "Total Spent", "Loyalty Points"))
    for customer in customers.values():
        print("{:<30} ${:>14.2f} {:>15d}".format(customer.email, customer.total_spent, customer.loyalty_points))

    # Print monthly totals
    print("\nMonthly Totals:")
    print("{:<10} {:<15} {:<15}".format("Month", "Total Spent", "Avg. Spend/Customer"))
    monthly_totals = {}
    for customer in customers.values():
        for month_year, spending in customer.monthly_spending.items():
            monthly_totals[month_year] = monthly_totals.get(month_year, {'total_spent': 0, 'num_customers': 0})
            monthly_totals[month_year]['total_spent'] += spending
            monthly_totals[month_year]['num_customers'] += 1

    for month_year, totals in monthly_totals.items():
        avg_spend = totals['total_spent'] / totals['num_customers']
        print("{:<10} ${:>14.2f} ${:>15.2f}".format(month_year, totals['total_spent'], avg_spend))

main()