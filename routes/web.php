<?php

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
Route::get('/fatemah',function(){
    return view('newfolder.fatemah');
});
Route::view('test','fatemah');
// Route::get('/string/{namer}', function ($namer) {
//     return "this Hi from: " .$namer;
// });
Route::get('/about', function () {

    return view('about');
});
Route::get('/teams', function () {

    return view('teams');
});
Route::get('/category/{id}', function ($id) {
$cats=[
    1=>"games",
    2=>"tools",
    3=>"books"
];
    return view('category',[
        'cat'=>$cats[$id]??"notfound"
    ]);
});
// Route::get('test-me','contact',[
//     'contact'=>'hello'
// ]);



Route::view('contact-me', 'contact',[
    'contact'=>'<script>hello</script>'
]);
Route::get('contact', function(
    
){
    $name=request("name");
    return $name;
});
Route::get('contact/{id}', function($id){
    return view('contact',[
        'id'=>$id
    ]);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
