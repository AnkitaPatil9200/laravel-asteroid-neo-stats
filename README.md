# ![Laravel Asteroid Neo Stats App]

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Clone the repository

    git clone git@github.com:AnkitaPatil9200/laravel-asteroid-neo-stats.git

Switch to the repo folder

    cd laravel-asteroid-neo-stats

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**command list**

    git clone git@github.com:AnkitaPatil9200/laravel-asteroid-neo-stats.git
    cd laravel-asteroid-neo-stats
    composer install
    cp .env.example .env
    php artisan key:generate

## API Specification

Create your own API KEY from Nasa's website https://api.nasa.gov in order to be able to test with below rate limits.

    Hourly Limit: 1,000 requests per hour

If you do not create API KEY, DEMO_KEY will be used as API KEY which has below rate limits.

    Hourly Limit: 30 requests per IP address per hour
    Daily Limit: 50 requests per IP address per day

Once you create API KEY, assign the new key to API_KEY environment variable in .env file 
(Refer .env.example file)

# Code overview

## Files

- `routes/web.php` - Contains routes
- `app/Http/Controllers/HomeController.php` - Contains all the backend functions
- `app/Helper/HomeHelper.php` - Contains cURL request
- `public/js/home.js` - Contains all the js code
- `resources/views/includes/head.blade.php` - Contains page header
- `resources/views/includes/main-content.blade.php` - Yields the content
- `resources/views/includes/main-includes.blade.php` - Main file that includes the separate files
- `resources/views/includes/footer.blade.php` - Page footer
- `resources/views/pages/home.blade.php` - Contains main UI of the app
- `public/css/custom.css` - Contains custom css code
- `public/css/ajax-loader.css` - Contains css for ajax loader/spinner

## Environment variables

- `.env` - Environment variables can be set in this file