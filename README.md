###### Wed Apr  3 09:57:12 IDT 2019

# EntFriend  
Web App for Banking and Taxes Manaement for Belarusian Entrepreneurs and Small Businesses  



## Setup Local Development Environment on MacOS

### Prerequisites: 
1. Homebrew – package manager for MacOS  
    https://brew.sh/


### Step by Step Guide

1. Install required components:  
    ```
    brew install php
    brew install composer
    brew install sqlite
    ```

1. Clone this repo  
    ``` bash
    git clone https://github.com/adzsoft/Backend_EntFriend.git
    ```

1. Create new file in the project at path (you may choose your own name for the file)  
    ``` bash
    # run from project's root dir  
    touch database/db_name.sqlite
    ```  

1. Open the console and cd your project root directory  

1. Install required PHP packages and finish setup  
    ``` bash
    # run from project's root dir  
    composer install  
    php artisan key:generate  
    php artisan migrate  
    php artisan db:seed  
    composer dump-autoload  
    
    # <OPTIONALLY – if there are no any tables in database>
    php artisan migrate  
    # </OPTIONALLY>
    
    php artisan serve  
    ```

1. You can now access your project at  
    http://localhost:8000  

1. Test that end-points are configured  
    ``` bash
    php artisan route:list
    ```

    The output should be similar to the one on the picture:  
    ![](routes.png)  
