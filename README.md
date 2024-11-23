# Sample PHP CRM site

A simple Laravel site for customers and purchases.

This [loom video](https://www.loom.com/share/41b7a03e518d4e0fb24edce071a9f363) provides an overview of the project.

Note that a bug in loyalty_point calculations was fixed after the video was created.  So it doesn't mention [verify.py](data/verify.py) which does some independent calculations of total_spend and loyalty_points for each customer.

### Project Requirements

- customers table with columns id, name, email, phone_number, loyalty_points, created_at.
- purchase_history table with columns id, customer_id, purchasable, price, quantity, total, purchase_date.
- customer name should only contain alphabetic characters.
- customer email should be unique.
- customer email should be converted to lowercase.
- customer email should be properly formatted.
- date should be formatted as 'YYYY-MM-DD'.
- phone number should be formatted as 'XXX-XXX-XXXX'.
- customers API should support filters (min_date, max_date, min_spend, max_spend).
- customers loyalty_points = 1 per 10 items purchased + 1 per 10 dollars spent
- loyalty_points only counts purchases starting from jan 2022.
- report should have one row per month in ascending order
- report should have columns average_spend, total_points, 

### Endpoints

Assumes the site is running locally on port 8000.

- [Main Page](http://127.0.0.1:8000/) shows a full list of all customers and purchases.
- [Report Page](http://127.0.0.1:8000/report) shows a month by month report.
- [Customers API](http://127.0.0.1:8000/customers) returns customers as JSON.
- [Purchases API](http://127.0.0.1:8000/purchases) returns purchases as JSON and supports [filters](http://127.0.0.1:8000/purchases?max_spend=4000).

### Preliminary Setup

I used mac OS, homebrew, git, php, composer, and laravel for this project.

- install homebrew
```
    /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
    echo "export PATH=/opt/homebrew/bin:$PATH" >> ~/.bash_profile && source ~/.bash_profile
```
- install dependencies
```
    brew install git
    brew install php
    brew install composer
    brew install laravel
```

## Running Locally

These commands should be run from the [root directory](laravel/crm) of the laravel site.

- Refresh the database (Uses Laravel's built in sqllite database).
```
    php artisan migrate:fresh
```
- Host the site locally (defaulted to port 8000).
```
    php artisan serve
```
## Source Code

Laravel creates a bunch of files by default.
Here are the ones that were added/modified for this project.

- [Purchase Model](laravel/crm/app/Models/Purchase.php)
- [Customer Model](laravel/crm/app/Models/Customer.php)
- [Database Tables](laravel/crm/database/migrations/0001_01_01_000003_create_tables.php)
- [Imported Rows](laravel/crm/database/migrations/0001_01_01_000004_create_rows.php)
- [Routes](laravel/crm/routes/web.php)
- [Report View](laravel/crm/resources/views/report.blade.php)
- [Tables View](laravel/crm/resources/views/result.blade.php)
- [CustomerController](laravel/crm/app/Http/Controllers/CustomerController.php)
- [PurchaseController](laravel/crm/app/Http/Controllers/PurchaseController.php)

### Data Import

Used a script to parse [purchase_history.csv](data/purchase_history.csv) and [customers.csv](data/customers.csv) and generate a migration file that adds all the rows with validation.  This part could be rewritten since it doesn't need to run on laravelplayground.com anymore.  Ideally the controller would insert the data, and enforce validation at this point.  All updates would go through the API Controller.

- [Parse Customers](data/parse_customers.sh)
- [Parse Purchases](data/parse_purchases.sh)
- [Generate Rows](data/generate_rows.sh)
- [Generated Rows](data/rows.php)
