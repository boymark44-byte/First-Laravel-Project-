<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Linking our HomeController to our Routes
use App\Http\Controllers\GuitarsController; // Linking our GuitarsController to our Routes

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
| 4th Part of the Tutorial: Routing to Controllers. 
|
| 
*/ 
Route::get('/',[HomeController::class, 'index'])->name('home.index');
Route::get('/about',[HomeController::class, 'about'])->name('home.about');
Route::get('/contact',[HomeController::class, 'contact'])->name('home.contact');


// Creating the routes for GuitarController. Routes already provided us with necessary URL for our resource.
Route::resource('guitars', GuitarsController::class);


// // FIrst Part of the Tutorial: Routing Requests. Uses Blade Methods to include php code.
// // Welcome Page
// Route::get('/', function () {
//     return view('welcome'); 
// });

// // About Page
// Route::get('/about', function() {
//     return "<h1> About Page </h1>";
// });

// // Contact Page
// Route::get('/contact', function() {
//     return "<h1> Contact Page </h1>";
// });




// // 2nd Part of the Tutorial, Working with Query Data or User Inputs. 
// // Note: Never Trust users. Always sanitize your inputs by adding strip_tags against malicious attacks.
// Route::get('/store', function() {
//     $category = request('category');

//     // Adding some logical conditions
//     if(isset($category))
//     {
//         return "You are viewing the store for " . strip_tags($category) . ".";
//     } 

//     return "You are viewing all instruments.";

//     //return "You are viewing the store for " . $category;
// });
// // We are still using URL Query like this: /store?catgeory=guitars&item=strat



// 3rd Part of the Tutorial: Route URL Parameters.
// Nice about this approcah is that you don't really have to strip tags or sanitize this
// because if there's any characters that are not valid URL characters, this isn;t going to work at all.
// Make these route parameters, optional.
Route::get('/store/{category?}/{item?}', function($category = null, $item = null) {

        // Adding some logical conditions.
        if(isset($category))
        {   
            if(isset($item)){
                return "You are viewing the store for {$category} for {$item}";
            }
            return "You are viewing the store for " . strip_tags($catgeory);
        } 
        return "You are viewing all instruments.";
});