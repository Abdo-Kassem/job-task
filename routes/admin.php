<?php

use App\Http\Controllers\Admin\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function() {

    Route::resource('employees',EmployeeController::class);

});
    
