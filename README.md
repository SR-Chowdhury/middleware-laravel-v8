<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://res.cloudinary.com/practicaldev/image/fetch/s--nWYze10a--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://dev-to-uploads.s3.amazonaws.com/i/qtwqedl51vqx5zkxa65d.png" width="400"></a></p>

# Middleware in Laravel v8

> **Answer:** Middleware provide a convenient mechanism for inspecting and filtering HTTP requests entering your application. There are several middleware
> included in the Laravel framework, including middleware for authentication and CSRF protection. All of these middleware are located in the
> **`app/Http/Middleware directory`**.
> * Create a Middleware **`php artisan make:middleware exampleMiddleware`**
> * Requesting Middleware: There are three types of Middleware
>   _1.Global Middleware_, 
>   _2.Assigning Middleware To Routes_, 
>   _3.Group Middleware_
> * **Global Middleware:** `app/Http/karnel.php` -> `protectd $middleware`  
> * **Assigning Middleware To Routes:** `app/Http/karnel.php` -> `protectd $routeMiddleware`  
>   **N.B.** When you want to use middleware for one or more routes.
>   ```
>       Route::get('/about', function() {
>           return view('about');
>       })->middleware('test');
>   ```
> * **Group Middleware:** `app/Http/karnel.php` -> `protected $routeMiddleware`  
>    ```
>    Route::middleware(['web'])->group(function () {
>        //
>    });
>    ```

# Route Prefixes

    Route::prefix('superstar')-> group(function() {
        Route::get('/me', function () {
            echo "This is Me"; // Run in the browser: localhost:xxxx/supserstar/me
        });
        Route::get('/you', function () {
            echo "This is you"; // Run in the browser: localhost:xxxx/supserstar/you
        });
    });
    
