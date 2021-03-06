<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
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

Route::get('/home', [homeController::class, 'index'] 
);
Route::get('/fitur', [homeController::class, 'fitur'] 
);
Route::get('/download',[homeController::class, 'download'] 
);
Route::get('/signup',[homeController::class, 'signup'] 
);
Route::get('/signin',[homeController::class, 'signin'] 
);
Route::get('/category',[homeController::class, 'category'] 
);
Route::get('/dashboard',[homeController::class, 'dashboard'] 
);
Route::get('/profile',[homeController::class, 'profile'] 
);
Route::get('/pertandingan',[homeController::class, 'history'] 
);
Route::get('/display', function(){
    $student = app('firebase.firestore')->database()->collection('order')->documents();
    // print_r('ID ='.$student->id());
    // print_r("<br>". 'Student Name = '.$student->data()['location']);
    // print_r("<br>".'Student Age = '.$student->data()['idRoom']);
    foreach ($student as $document) {
        if ($document->exists()) {
            print_r($document->data());
            printf(PHP_EOL);
        }
    }
  });



