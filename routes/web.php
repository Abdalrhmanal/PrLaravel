<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\SessoinsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
use App\Models\Courses;
use App\Models\Sessoins;
use App\Models\Students;
use App\Models\Teachers;
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
    return view('Admen.index');
});
// Route::get('/', function () {
//     return view('Author.index');
// });
// المعلم كم كورس بيعطي
Route::get('/find/{id}/std', function ($id) {
    $prs = Teachers::find($id)->courses;
    return $prs;
});
// الكورس كم طالب فيه
Route::get('/find/{id}/cor', function ($id) {
    $prs1 = Courses::find($id)->student;
    return $prs1;
});
// جلسات كل كورس
Route::get('/sessoin/{id}/pp', function ($id) {
    Courses::find($id)->session; [SessoinsController::class,'Index'];
});
// تفاصيل كل جلسة 
Route::get('/find/{id}/ses', function ($id) {
    $prs1 = Sessoins::find($id)->details;
    return $prs1;
});


Route::get('/cc',[CoursesController::class,'Index']);
Route::get('/',[TeachersController::class,'Index']);
Route::get('/stud',[StudentsController::class,'Index']);
Route::get('/sessoin',[SessoinsController::class,'Index']);
Route::get('/detail',[DetailsController::class,'Index']);

Route::get('/cc/{courses}',[CoursesController::class,'show']);
Route::get('/sessoin/{sessoins}',[SessoinsController::class,'show']);
Route::get('/stud/{students}',[StudentsController::class,'show']);
Route::get('/detail/{details}',[DetailsController::class,'show']);

Route::get('/cc/create/cor',[CoursesController::class,'create']);
Route::post('/cc/create/cor',[CoursesController::class, 'store']);
Route::get('/sessoin/create/ses',[SessoinsController::class,'create']);
Route::post('/sessoin/create/ses',[SessoinsController::class, 'store']);
Route::get('/stud/create/std',[StudentsController::class,'create']);
Route::post('/stud/create/std',[StudentsController::class, 'store']);
Route::get('/create/tec',[TeachersController::class,'create']);
Route::post('/create/tec',[TeachersController::class, 'store']);


Route::get('/cc/{courses}/ed',[CoursesController::class,'edit']);
Route::post('/cc/{courses}/ed',[CoursesController::class, 'update']);
Route::get('/sessoin/{sessoins}/ed',[SessoinsController::class,'edit']);
Route::post('/sessoin/{sessoins}/ed',[SessoinsController::class, 'update']);
Route::get('/stud/{students}/ed',[StudentsController::class,'edit']);
Route::post('/stud/{students}/ed',[StudentsController::class, 'update']);
Route::get('/{teachers}/ed',[TeachersController::class,'edit']);
Route::post('/teachers/ed',[TeachersController::class, 'update']);


Route::delete('/detail/{details}',[DetailsController::class,'destroy']);
Route::delete('/ccr/{courses}',[CoursesController::class,'destroy']);
Route::delete('/std/{students}',[StudentsController::class,'destroy']);
Route::delete('/sess/{sessoins}',[SessoinsController::class,'destroy']);
Route::delete('/techs/{teachers}',[TeachersController::class,'destroy']);
