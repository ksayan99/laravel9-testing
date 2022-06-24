## create laravel installer
`composer global require laravel/installer`

## create migration
`php artisan make:migration create_customname_table`

## file specific migration
`php artisan migrate --path=/database/migrations/filename.php`

## run file specific seeder
`php artisan db:seed --class=Filename`

## migration with seeder
`php artisan migrate:fresh --seed`

## create controller with resource
`php artisan make:controller controller_name -r`

## change error files visibility
`php artisan vendor:publish --tag==laravel-errors`

## whitelist page maintanace mode
`php artisan down --secret='keyword'`

## create custom request file
`php artisan make:request Filename`