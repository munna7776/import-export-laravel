## Laravel Installation
```bash
composer global require laravel/installer
laravel new example-app
cd example-app
php artisan serve
```
## Documentation
[Documentation](https://laravel.com/docs/8.x/installation)

# Steps after Cloning
```bash
Composer install
copy .env-example .env
php artisan key:generate
```

## Excel package
```bash
composer require maatwebsite/excel
Configure in config/app.php:
'providers' => [
  .......
  .......
  .......
  Maatwebsite\Excel\ExcelServiceProvider::class,
 
 ],  

'aliases' => [ 
  .......
  .......
  .......
  'Excel' => Maatwebsite\Excel\Facades\Excel::class,

], 
php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider"

```

# Pdf Package
```bash
composer require barryvdh/laravel-dompdf

'providers' => [
  Barryvdh\DomPDF\ServiceProvider::class,
],

'aliases' => [
  'PDF' => Barryvdh\DomPDF\Facade::class,
]

php artisan vendor:publish
```
