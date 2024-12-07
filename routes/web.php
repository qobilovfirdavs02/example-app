<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Showcontroller;
use App\Http\Controllers\MavodkhoController;
use App\Http\Controllers\StudentController;
Route::get(
    '/', 
    [ShowController::class, 'index']
)->name('index_route');

Route::get(
    '/abouturl', 
    [ShowController::class, 'about']
)->name('about_route');

Route::get(
    '/contacturl', 
    [ShowController::class, 'contact']
)->name('contact_route');

Route::get(
    '/muhtasarurl', 
    [ShowController::class, 'muhtasar']
)->name('muhtasar_route');

Route::get('/baza', function(){
    $result = DB::table('menu')->get();
    return view('baza',compact('result'));
});

Route::get('/mahsulot', function(){
    $sql = DB::table('mavodkhos')->get();
    return view('mahsulot',compact('sql'));
});
/* Mavokho route */
Route::get('/mavodkho',[MavodkhoController::class, 'index'])->name('urlselect');

Route::post('/mavodkho/story', [MavodkhoController::class, 'story'])->name('urlstory');

Route::post('/mavodkho/update', [MavodkhoController::class, 'update'])->name('urlupdate');

Route::post('/mavodkho/delete', [MavodkhoController::class, 'delete'])->name('urldelete');

/* Students route */
Route::resource('student', StudentController::class);