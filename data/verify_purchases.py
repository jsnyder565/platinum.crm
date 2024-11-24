import csv
from datetime import datetime

class Customer:
    def __init__(self, email):
        self.email = email
        self.purchases = []

    def add_purchase(self, quantity, total, date):
        self.purchases.append((quantity, total, date))

    @property
    def total_purchases(self):
        return len(self.purchases)

    @property
    def total_spent(self):
        return sum(total for _, total, _ in self.purchases)

    @property
    def point_dollars(self):
        return sum(total for _, total, date in self.purchases if date.year >= 2022)

    @property
    def point_items(self):
        return sum(quantity for quantity, _, date in self.purchases if date.year >= 2022)

    @property
    def loyalty_points(self):
        return self.point_dollars // 10 + self.point_items // 10 * 10

def main():
    customers = {}
    customer_order = []

    # Read customer order from customers.csv
    with open('customers.csv', 'r') as f:
        reader = csv.reader(f)
        header = next(reader)  # Read the header row
        email_index = header.index('email')  # Assuming 'email' is the column name

        for row in reader:
            customer_order.append(row[email_index])

    # Group all purchases by customer
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

            if email not in customers:
                customers[email] = Customer(email)
            customers[email].add_purchase(quantity, total, date)

    # Print the header
    header_format = "{:<30} {:<20} {:<15} {:<15} {:<15} {:<15}"
    print(header_format.format("Email", "Total Purchases", "Total Spent", "Point Dollars", "Point Items", "Loyalty Points"))

    # Print customer list in the order specified in customers.csv
    for email in customer_order:
        customer = customers.get(email, Customer(email))
        print(header_format.format(customer.email, customer.total_purchases, f"${customer.total_spent:.2f}", f"${customer.point_dollars:.2f}", customer.point_items, customer.loyalty_points))



if __name__ == "__main__":
    main()