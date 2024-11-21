# platinum.crm
Sample PHP CRM site

-**index.php**           Defines routes /, /customers and /purchases
-**tables.php**          Creates the database tables
-**model.php**           Defines model classes
-**bootstrap.php**       Inserts the actual data, validates, formats, calculate loyalty_points
-**result.blade.php**    Shows all customers and purchases in a table
-**controllers.php**     Contains API controllers that return json records.


TODO

-add filters for APIs
-add report endpoint


SETUP

-install git

    brew install git

-install php

    brew install php

-install homebrew

    /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
    echo "export PATH=/opt/homebrew/bin:$PATH" >> ~/.bash_profile && source ~/.bash_profile

-install composer
-install laravel
    brew install laravel