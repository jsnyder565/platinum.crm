# Sample PHP CRM site

A small site / API for customers and purchases.

### Endpoints

Assumes the site is running locally on port 8000.

- [Main Page](http://127.0.0.1:8000/) shows a full list of all customers and purchases.
- [Report Page](http://127.0.0.1:8000/report) shows a month by month report.
- [Customers API](http://127.0.0.1:8000/customers) returns customers as JSON.
- [Purchases API](http://127.0.0.1:8000/purchases) returns purchases as JSON.

## Required Setup

I used homebrew, git, php, composer, and laravel for this project.

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

### Running Locally

These commands should be run from the [root directory](laravel/crm) of the laravel site.

- Refresh the database (Uses Laravel's built in sqllite database).
```
    artisan migrate:fresh
```
- Host the site locally (defaulted to port 8000).
```
    artisan serve
```
## Source Code

Laravel creates a bunch of files by default.
Here are the ones that were added/modified for this project.

- [Purchase Model](laravel/crm/app/Models/Purchase.php)
- [Customer Model](laravel/crm/app/Models/Customer.php)
- [Database Tables](laravel/crm/database/migrations/0001_01_01_000003_create_tables.php)
- [Imported Rows](laravel/crm/database/migrations/0001_01_01_000004_create_rows.php)
- [Routes](laravel/crm/routes/web.php)
- [Default View](laravel/crm/resources/views/report.blade.php)
- [Report View](laravel/crm/resources/views/result.blade.php)
- [CustomerController.php](laravel/crm/app/Http/Controllers/CustomerController.php)
- [PurchaseController.php](laravel/crm/app/Http/Controllers/PurchaseController.php)

## Data Import

Used a script to parse [purchase_history.csv](data/purchase_history.csv) and [customers.csv](data/customers.csv) and generate a migration file that adds all the rows with validation.  This part could be rewritten since it doesn't need to run on laravelplayground.com anymore.

- [Parse Customers](data/parse_customers.sh)
- [Parse Purchases](data/parse_purchases.sh)
- [Generate Rows](data/generate_rows.sh)
- [Generated Rows](data/rows.php)
