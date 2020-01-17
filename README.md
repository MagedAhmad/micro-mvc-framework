# Custom-mvc-framework 

## Installation

* Rename `config/.config.Example.php` to `config/.config.php`
* Enter your database info in .config.php
* run `composer install`
* run `npm install`

You are ready to go ..

###### Routing 
define your routes in ``config\routes.php`` :
``````
$routes = [
    'GET' => [
        '/' => 'HomeController@home',
    ],
    'POST' => [],
];
``````
 
###### Genrate controllers 

Using command line enter 
````
php bin/console create:controller <controller-name>
````

this will create a controller in ``src/Controller/<controller-name>.php``

###### Genrate tests 

Using command line enter 
````
php bin/console create:test <testClass-name>
````

this will create a test in ``test/<testClass-name>.php``