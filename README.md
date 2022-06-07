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

still need to set up user / admin seeder
