<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome1');
});

//Route::get('/blog',function (){
//    return view('blog');
//});
Route::get('/students', [\App\Http\Controllers\StudentController::class, 'index'])
    ->name('student');


Route::get('/students/create', [\App\Http\Controllers\StudentController::class, 'create'])
    ->name('student.create');

Route::post('/students', [\App\Http\Controllers\StudentController::class, 'store'])
    ->name('student.store');

Route::get('/students/{id}', [\App\Http\Controllers\StudentController::class, 'show'])
    ->name('student.show');

Route::get('/students/edit/{id}', [\App\Http\Controllers\StudentController::class, 'edit'])
    ->name('student.edit');

Route::put('/students/update/{id}', [\App\Http\Controllers\StudentController::class, 'update'])
    ->name('student.update');

Route::delete('/students/delete/{id}', [\App\Http\Controllers\StudentController::class, 'destroy'])
    ->name('student.destroy');


Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])
    ->name('blog');

Route::get('/blog/{name}', function ($name) {
    return $name;
});

Route::get('/products', function () {
    return view('product');
});

//Route::get('/products/{name?}', function ($name = null) {
//    if ($name) {
//        return $name;
//    }else{
//        return 'name is required';
//    }
//});
