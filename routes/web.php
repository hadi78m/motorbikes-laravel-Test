<?php

use App\Http\Controllers\Client\MotorsController;
use App\Models\Motor;
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


// Route::get('/test', fn () => view('client/test'))->name('test');
// Route::any('/index',[MotorsController::class,'index'])->name('index');
// Route::any('/filter',[MotorsController::class,'filter'])->name('filter');
Route::middleware(['splade'])->group(function () {

    Route::get('/',[MotorsController::class,'index'])->name('home');
    Route::post('/store',[MotorsController::class,'store'])->name('store');

    // Route::get('/docs', fn () => view('docs'))->name('docs');
    Route::get('/add', fn () => view('client.add'))->name('add');
    Route::get('/show/{id}', fn ($id = null) => view('client.show',['id'=>$id,'image'=>Motor::whereId($id)->select('image')->first()]))->name('show.motor');

    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();
});
