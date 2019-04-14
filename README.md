###### Wed Apr  3 09:57:12 IDT 2019

# EntFriend  
Web App for Banking and Taxes Manaement for Belarusian Entrepreneurs and Small Businesses

# How is it works
## For Mac Os Users:
1. Download homebrew if you haven't.  
    `/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"`
1. Install sqlite `brew install sqlite3`. 
1. To open sqlite on Mac: `sqlite3'`  
1. Create a database in the project for the path </strong>database/db_name.sqlite</strong> with any named, for example  
`touch db_name.sqlite`. 
1. Download composer https://getcomposer.org/download/  
1. Clone repo above.   
1. Rename `.env.example` file to `.env` inside your project root and fill the database information.
1. Edit configuration in the file <strong>.env</strong>:  
`DB_CONNECTION=sqlite`  
`DB_DATABASE=/absolute/path/to/database.sqlite`  
1. Open the console and cd your project root directory.  
1. Run `composer install` or `php composer.phar install`.  
1. Run `php artisan key:generate`.  
1. Run `php artisan migrate`.  
1. Run `php artisan db:seed` to run seeders, if any.  
1. Run `php artisan serve`.    
1. Run `composer dump-autoload` or `composer.phar dump-autoload` and check if there are any tables in the database, if not, run again `php artisan migrate`.  

##### You can now access your project at localhost:8000 :)

## List of routes to use and test 
![List of routes](routes.png)
