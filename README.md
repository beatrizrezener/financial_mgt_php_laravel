# financial_mgt_php_laravel

Generated with `composer create-project --prefer-dist laravel/laravel php_laravel`

Migrations created 
```
php artisan make:migration create_categories_table
php artisan make:migration create_expenses_table
```

Added auth:
```
> composer require laravel/ui
> php artisan ui vue --auth
> php artisan migrate
```

Generated controllers:
```
> php artisan make:controller CategoryController -r -m Category
> php artisan make:controller ExpenseController -r -m Expense
```
