# PLEASE NOTE: This repository is no logner maintained please use [new](https://github.com/elibyy/tcpdf-laravel) one

# Laravel 5 TCPDF

[![Join the chat at https://gitter.im/elibyy/laravel-tcpdf](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/elibyy/laravel-tcpdf?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

A simple [Laravel 5](http://www.laravel.com) service provider with some basic configuration for including the [TCPDF library](http://www.tcpdf.org/)

## Installation
#for laravel 5.1 use the 5.1 branch or version 0.0.4
 
The Laravel TCPDF service provider can be installed via [composer](http://getcomposer.org) by requiring the `elibyy/laravel-tcpdf` package in your project's `composer.json`. (The installation may take a while, because the package requires TCPDF. Sadly its .git folder is very heavy)

```json
{
    "require": {
        "elibyy/laravel-tcpdf": "0.*"
    }
}
```

Next, add the service provider to `config/app.php`.

```php
'providers' => [
    //..
    'Elibyy\TCPDF\ServiceProvider',
]
```

That's it! You're good to go.

Here is a little example:

```php
use PDF;

PDF::SetTitle('Hello World');

PDF::AddPage();

PDF::Write(0, 'Hello World');

PDF::Output('hello_world.pdf');
```
For a list of all available function take a look at the [TCPDF Documentation](http://www.tcpdf.org/doc/code/classTCPDF.html)

## Configuration

Laravel-TCPDF comes with some basic configuration.
If you want to override the defaults, you can publish the config, like so:

    php artisan vendor:publish

Now access `config/laravel-tcpdf.php`to customize.
