## To Do List Application

A simple To Do list developed in Laravel 4.2.8

Note: The production database configuration for heroku deployment was done according to this blog:
[Laravel on Heroku - Using a PostgreSQL database - MattStauffer.co](http://mattstauffer.co/blog/laravel-on-heroku-using-a-postgresql-database)
Because the app/config/database.php file processes an env variable from the heroku platform you will get php parse errors when developing locally. To avoid this you can either edit the database.php file, or modify your local environment by executing the following statement from the command line in your bash shell or by editing your .bashrc file:
export DATABASE_URL="postgres://user:password@host:5432/dbname"

The working application is avaulable at http://todo.gooselive.url.ph
Because it is deployed on a free heroku development account, the server dyno goes to sleep every few hours, so initial page load may take 10-20 seconds.

Features user registration and authentication, Bootstrap theming - responsive css.
![](screenshots/todolist.png)
![](screenshots/register.png)
![](screenshots/login.png)
![](screenshots/createnew.png)
### Credits
#### Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)



Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

##### [Laravel To Do List App by phpacademy](https://www.youtube.com/playlist?list=PLfdtiltiRHWGH8AngyP6cp525_R_NExcR)
##### [How to Laravel series: Let's talk Gulp - © Christoph Rumpel 2014](http://christoph-rumpel.com/2014/02/how-to-laravel-series-lets-talk-gulp/)
##### [Laravel 4 Simple Blog by fallendown2005](https://www.youtube.com/playlist?list=PLLJSbW-UxRIwkhnNHaxPWrHhRmBgQ4T-Q)