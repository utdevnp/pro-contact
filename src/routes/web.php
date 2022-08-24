<?php 
namespace Utdevnp\Contact\routes;
use Illuminate\Support\Facades\Route;
use Utdevnp\Contact\Http\Controllers\ContactController;

Route::post("contact", [ContactController::class,'send']);
Route::get("contact", [ContactController::class,'index'])->name("contact");

// Route::group(["namespace"=>'Utdevnp\Contact\Http\Controllers'], function(){
    
// });

