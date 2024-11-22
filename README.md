# Sample PHP CRM site

A small site / API for customers and purchases.

## Endpoints

Assumes the site is running locally on port 8000.

- [Main Page](http://127.0.0.1:8000/) shows a full list of all customers and purchases.
- [Report Page](http://127.0.0.1:8000/report) shows a month by month.
- [Customers API](http://127.0.0.1:8000/customers) returns customers as JSON.
- [Purchases API](http://127.0.0.1:8000/purchases) returns purchases as JSON.

# SETUP

Uses Laravel's built in sqllite database.

- install homebrew

    /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
    echo "export PATH=/opt/homebrew/bin:$PATH" >> ~/.bash_profile && source ~/.bash_profile

- install dependencies

    brew install git
    brew install php
    brew install composer
    brew install laravel

- refresh the database

    artisan migrate:fresh

- run the site

    artisan serve

# Source Code

Laravel creates a bunch of files by default.
Here are the ones that were added/modified for this project.

- [Purchase.php](laravel/crm/app/Models/Purchase.php)
- [Customer.php](laravel/crm/app/Models/Customer.php)
- [Database Tables](laravel/crm/database/migrations/0001_01_01_000003_create_tables.php)
- [Imported Rows](laravel/crm/database/migrations/0001_01_01_000004_create_rows.php)
- [Routes](laravel/crm/routes/web.php)
- [Default View](laravel/crm/resources/views/report.blade.php)
- [Report View](laravel/crm/resources/views/result.blade.php)
- [CustomerController.php](laravel/crm/app/Http/Controllers/CustomerController.php)
- [PurchaseController.php](laravel/crm/app/Http/Controllers/PurchaseController.php)