* 07 June 2022

`laravel new aifx_official_v1`

creates laravel v9 framework 


`cd aifx_official_v1`

`composer require laravel/ui`

`php artisan ui bootstrap --auth`

`npm install && npm run dev`

// only if npm error -- child error

`npm install autoprefixer@10.4.5 --save-exact`

`code .` 

to open VS Code

adjust .env and DB for migration

`php artisan migrate`

`composer dump`

`php artisan optimize:clear`

added adminlte resources to use in the build.


`php artisan serve`

go to http://127.0.0.1:8000 to test the build and login

`https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Installation`

`composer require jeroennoten/laravel-adminlte`

`php artisan adminlte:install`

`php artisan adminlte:status`

```shell
php artisan adminlte:status
Checking the resources installation ...
 7/7 [============================] 100%
All resources checked succesfully!

+------------------+------------------------------------------+---------------+----------+
| Package Resource | Description                              | Status        | Required |
+------------------+------------------------------------------+---------------+----------+
| assets           | The AdminLTE required assets             | Installed     | true     |
| config           | The default package configuration file   | Installed     | true     |
| translations     | The default package translations files   | Installed     | true     |
| main_views       | The default package main views           | Not Installed | false    |
| auth_views       | The default package authentication views | Mismatch      | false    |
| basic_views      | The default package basic views          | Mismatch      | false    |
| basic_routes     | The package routes                       | Not Installed | false    |
+------------------+------------------------------------------+---------------+----------+

Status legends:
+---------------+----------------------------------------------------------------------------------------------+
| Status        | Description                                                                                  |
+---------------+----------------------------------------------------------------------------------------------+
| Installed     | The resource is installed and matches with the default package resource                      |
| Mismatch      | The installed resource mismatch the package resource (update available or resource modified) |
| Not Installed | The package resource is not installed                                                        |
+---------------+----------------------------------------------------------------------------------------------+
```

`adminlte:install --only=auth_views`


Note, that the command just replaces the authentication blade views. The controllers and routes of the authentication scaffolding that where installed in the Laravel framework are not touched. On the other hand, to get login, logout, and register features fully working you will need to setup a database and run the proper migrations as indicated on the Laravel documentation.

By default, the installed login view contains a link to the registration and password reset views. If you don't want a registration or password reset form, set the `register_url` or `password_reset_url` setting to `null` on the `adminlte.php` configuration file and the respective link will not be displayed.

Please, note the provided login view uses the iCheck Bootstrap plugin. In order to install the plugin on the `public` folder, you will need to run the next artisan command:
```shell
php artisan adminlte:plugins install --plugin=icheckBootstrap

```
```shell
php artisan adminlte:plugins install --plugin=icheckBootstrap
 1/1 [============================] 100%
The plugins installation is complete. Summary:

+-----------------+-----------+
| Plugin Key      | Status    |
+-----------------+-----------+
| icheckBootstrap | Installed |
+-----------------+-----------+
```

`php artisan adminlte:install --only=main_views`

`php artisan adminlte:install --only=basic_routes`

`php artisan adminlte:install --only=basic_views`

```shell
php artisan adminlte:status
Checking the resources installation ...
 7/7 [============================] 100%
All resources checked succesfully!

+------------------+------------------------------------------+-----------+----------+
| Package Resource | Description                              | Status    | Required |
+------------------+------------------------------------------+-----------+----------+
| assets           | The AdminLTE required assets             | Installed | true     |
| config           | The default package configuration file   | Installed | true     |
| translations     | The default package translations files   | Installed | true     |
| main_views       | The default package main views           | Installed | false    |
| auth_views       | The default package authentication views | Installed | false    |
| basic_views      | The default package basic views          | Installed | false    |
| basic_routes     | The package routes                       | Installed | false    |
+------------------+------------------------------------------+-----------+----------+
```

Registered Admin user (Remember before deployemnt to disable register url).

still need to set up user / admin seeder

Adminlte Dashboard view successful

-------

added adminlte dist package to public & updated home.blade css links

`@extends('adminlte::page', ['iFrameEnabled' => true])`
