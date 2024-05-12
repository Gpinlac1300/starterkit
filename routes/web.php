<?php
use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/read',[ListController::class, 'read']);
 route::get('/add',[ListController::class, 'add']);
 route::post('/create',[ListController::class, 'create']);
 route::get('/edit/{id}',[ListController::class, 'edit']);
 route::put('/update/{id}',[ListController::class, 'update']);
 route::delete('/delete/{id}',[ListController::class, 'delete']);