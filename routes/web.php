<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function(){
    $name ='Yasmeen';
  //  return view ('about',[
      //  'name'=> $name
  //  ]) ;
  return view('about', compact('name')) ;
}) ;

Route::get('tasks',function(){
    $tasks=[
        'first-task' =>'Task1',
        'second-task' => 'Task2' ,
        'third-task' => 'Task3'
    ];
return view('tasks',compact('tasks')) ;
});

Route::get('show/{id}' ,function($id){
    $tasks=[
        'first-task' =>'Task1',
        'second-task' => 'Task2' ,
        'third-task' => 'Task3'
    ];
    $task= $tasks[$id] ;
return view('show' , compact('task')) ;
});

*/
Route::get('/',function(){
             return view('welcome');
});

Route::get('/about',[TaskController::class,'show_name']);
Route::post('/about',[TaskController::class,'send_name']);
Route::get('/contact',[TaskController::class,'index']);
Route::get('/contact/{id}',[TaskController::class,'show']);
Route::get('app',function(){

return view('layout.app');
});
Route::get('/',function(){
return view('tasks');
});
