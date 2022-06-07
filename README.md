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


List the status of all the available plugins:
````
php artisan adminlte:plugins
php artisan adminlte:plugins list
````
```shell
php artisan adminlte:plugins list
Checking the plugins installation ...
 31/31 [============================] 100%
| Fullcalendar                        | fullcalendar            | Not Installed |
| iCheck Bootstrap                    | icheckBootstrap         | Installed     |
| InputMask                           | inputmask               | Not Installed |
| Ion.RangeSlider                     | ionRangslider           | Not Installed |
| jQuery Knob                         | jqueryKnob              | Not Installed |
| jQuery Mapael                       | jqueryMapael            | Not Installed |
| jQuery UI                           | jqueryUi                | Not Installed |
| jQuery Validation                   | jqueryValidation        | Not Installed |
| jQVMap                              | jqvmap                  | Not Installed |
| jsGrid                              | jsgrid                  | Not Installed |
| Pace Progress                       | paceProgress            | Not Installed |
| Select 2 with Bootstrap 4 Theme     | select2                 | Not Installed |
| Sparklines                          | sparklines              | Not Installed |
| Summernote                          | summernote              | Not Installed |
| Sweetalert 2 with Bootstrap 4 Theme | sweetalert2             | Not Installed |
| Tempus Dominus for Bootstrap 4      | tempusdominusBootstrap4 | Not Installed |
| Toastr                              | toastr                  | Not Installed |
+-------------------------------------+-------------------------+---------------+

Status legends:
+---------------+----------------------------------------------------------------------------------------+
| Status        | Description                                                                            |
+---------------+----------------------------------------------------------------------------------------+
| Installed     | The plugin is installed and matches with the default package plugin                    |
| Mismatch      | The installed plugin mismatch the package plugin (update available or plugin modified) |
| Not Installed | The plugin is not installed                                                            |
+---------------+----------------------------------------------------------------------------------------+
```


List the status of the specified plugins:
```
php artisan adminlte:plugins --plugin=datatables --plugin=select2
```
Install all the available plugins:
```
php artisan adminlte:plugins install
```
```shell
The plugins installation is complete. Summary:

+-------------------------+-----------+
| Plugin Key              | Status    |
+-------------------------+-----------+
| bootstrap4DualListbox   | Installed |
| bootstrapColorpicker    | Installed |
| bootstrapSlider         | Installed |
| bootstrapSwitch         | Installed |
| bsCustomFileInput       | Installed |
| chartJs                 | Installed |
| datatables              | Installed |
| datatablesPlugins       | Installed |
| daterangepicker         | Installed |
| ekkoLightbox            | Installed |
| fastclick               | Installed |
| filterizr               | Installed |
| flagIconCss             | Installed |
| flot                    | Installed |
| fullcalendar            | Installed |
| icheckBootstrap         | Installed |
| inputmask               | Installed |
| ionRangslider           | Installed |
| jqueryKnob              | Installed |
| jqueryMapael            | Installed |
| jqueryUi                | Installed |
| jqueryValidation        | Installed |
| jqvmap                  | Installed |
| jsgrid                  | Installed |
| paceProgress            | Installed |
| select2                 | Installed |
| sparklines              | Installed |
| summernote              | Installed |
| sweetalert2             | Installed |
| tempusdominusBootstrap4 | Installed |
| toastr                  | Installed |
+-------------------------+-----------+
```
Install only Pace Progress & Select2 plugins:
```
php artisan adminlte:plugins install --plugin=paceProgress --plugin=select2
```
Remove all the available plugins:
```
php artisan adminlte:plugins remove
```
Remove only Select2 plugin:
```
php artisan adminlte:plugins remove --plugin=select2
```
----------

Favicon

Favicons could be used easily. There are two different ways to do this. Take in mind that all the favicons should be placed in the `public/favicons/` folder. The next two combinations determines how the favicons will be used:

- **`['use_ico_only' => true, 'use_full_favicon' => false]`**
  
  Whit the previous configuration, the file `public/favicons/favicon.ico` will be used.
  
- **`['use_ico_only' => false, 'use_full_favicon' => true]`**
  
  Whit the previous configuration, multiple favicon files located on the `public/favicons/` folder will be used. The current code to use multiple favicons is the next one:
  
  ```html
  <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}"/>
  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicons/android-icon-192x192.png') }}">
  <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{ asset('favicons/ms-icon-144x144.png') }}">
  ```
  

..
