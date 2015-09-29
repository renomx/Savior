# Savior

Savior is a project build with Laravel 5 (PHP) that aims to easily build and deploy REST APIs to any service, production, stage or testing environments as well as your local environments.

I'm just starting this project to contribute to the community and help mysefl due to the increasing requests i've had for creating REST APIs for different applications and projects.

## The Stack

I'm using a common lamp stack with mysql as the database and take advantage of all Laravel cool features for environment configuration and detection, database configuration, flysystem storage, etc.

## Project Requirements

* PHP >= 5.5.9
* Composer
* MySql
* mcrypt PHP Extension
* Apache, Nginx

## Installation

* Clone the repo
* If you install composer globally run
```
composer install
```
* If you install composer locally run
```
php composer.phar install
```
* Create the database on MySql (the name you want) and configure database on the file .env
* Run the migration
```
php artisan migrate
```

That's it, it should be up and running.


## ToDo

There are tons of things to do, so if you want to contribute just make a fork or create a branch for the feature you wan't to do, all changes must be integrated through pull requests.

#### Coding
- [ ] Implement authentication, authorization and roles
- [ ] Found a web control (wysiwyg style) that accepts RAML or JSON and validates it
- [ ] Improve Flysystem implementation for saving configuration files

#### PM
- [ ] Create a Trello dashboard for managing all the project management

#### Documentation
- [ ] All the documenation

That's what came to my mind right know


Savior project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)