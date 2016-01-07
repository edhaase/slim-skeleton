# Web Service Scaffolding
---
## Purpose
The aim of this repository is to provide a solid foundation for building
a web service with [Slim 3](http://www.slimframework.com/) ([repo](https://github.com/slimphp/Slim))
using modern practices and to provide examples on how you might use some of it's
functionality. To that end, some example routes and controllers are provided,
as well as a basic logger and APC/APCu cache provided by
[Stash](http://www.stashphp.com/). Testing is provided by
[Codeception](http://codeception.com/).

## Installation

Via composer:

`composer create-project edhaase/slim-skeleton [destination]`.

Via git:

* Clone this repo
* Run `composer install`
* Run `composer bootstrap` or `composer run-script post-create-project-cmd`
* Enjoy!


### Regarding the autoloader
This project uses [PSR-4 autoloading](http://www.php-fig.org/psr/psr-4/). See
`composer.json` for the mappings. If you change them, you'll have to
rebuild the autoloader. You can do this by running
```composer dump-autoload --optimize```.

## Structure
```
docs/   - PHPDoc output
logs/   - Log output
public/ - Site configuration entry point limits what we expose
tests/  - Codeception tests
src/
    Controller/ - Route controllers
    Model/      - Data models
    Service/    - Service providers
    app.php     - Primary application
    routes.php  - Route creation 
vendor/ - Composer install directory
config.example.php  - Example application config constants

    
```

## Documentation
Documentation can be generated using phpDocumentor.

## Tests
    composer test

## Code standards
This project adheres to the [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) coding style.
    
## Scripts
We've also provided some scripts through composer to make life easier. 

```
composer
        codecept  - shortcut to codecept
        test      - alias for codecept run
        cs        - alias for "phpcs --standard=PSR2 src/",
        cbf       - alias for "phpcbf --standard=PSR2 src/",
        serve     - starts test server
        bootstrap - alias to @post-create-project-cmd
```