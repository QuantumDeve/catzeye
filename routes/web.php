<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('site.home');
// })->name('/');

Route::get('/', [UserController::class, 'index'])->name('/');

Route::get('/wedding_details/{id}','UserController@weddingDetails');

Route::get('/wedding_planner', function () {
    return view('site.wedding_planner');
})->name('/');


Route::get('/contact-us', function () {
    return view('site.contact');
})->name('/');

Route::get('/blog', function () {
    return view('site.blog');
})->name('/');

Route::get('/blog-details', function () {
    return view('site.blog_details');
})->name('/');


Route::get('/application', function () {
    return view('application.application');
})->name('/');

Route::get('/wedding', function () {
    return view('application.wedding');
})->name('wedding');

Route::get('/north-indian-wedding', function () {
    return view('application.northindian');
})->name('northindian');

Route::get('/maternity', function () {
    return view('application.maternity');
})->name('maternity');

Route::get('/new-born', function () {
    return view('application.newborn');
})->name('new-born');

Route::get('/birthday', function () {
    return view('application.birthday');
})->name('birthday');

Route::get('login', function () {
    return view('admin.auth.login');
});

Route::get('/admin/login', function () {
    return view('admin.auth.login');
});

Route::get('/personal', function () {
    return view('application.personal');
})->name('personal');

Route::get('/terms', function () {
    return view('application.terms');
})->name('terms');

Route::post('save-wedding', [UserController::class, 'saveChecklist'])->name('save.checklist');

Route::post('save-personal', [UserController::class, 'savePersonal'])->name('save.personal');

Route::get('save-all', [UserController::class, 'saveAll'])->name('save.all');

Auth::routes();

Route::group(['middleware' =>'auth'],function(){

    Route::get('admin/home', [AdminController::class, 'index'])->name('home');

    //employee
    Route::get('admin/add-employee', [AdminController::class, 'getEmployeeAdd'])->name('admin.add.employee');
    Route::get('admin/list-employee', [AdminController::class, 'listEmployee'])->name('admin.list.employee');
    Route::post('admin/save-employee', [AdminController::class, 'postEmployeeAdd'])->name('admin.save.employee');
    
    //salary
    Route::get('admin/add-salary', [AdminController::class, 'getSalaryAdd'])->name('admin.add.salary');
    Route::get('admin/list-salary', [AdminController::class, 'listSalary'])->name('admin.list.salary');
    Route::post('admin/save-salary', [AdminController::class, 'postSalaryAdd'])->name('admin.save.salary');
    Route::get('admin/filter-salary', [AdminController::class, 'filterSalary'])->name('admin.filter.salary');
    
    //enquiry
    Route::post('admin/get-personal/save-proceed', 'AdminController@submitProceed')->name('admin.save.proceed');
    Route::get('admin/list-enquiry', 'AdminController@listEnquiry')->name('admin.list.enquiry');
    Route::get('admin/get-event/{id}', 'AdminController@getEnquiry')->name('admin.get.enquiry');
    Route::get('admin/get-personal/{id}', 'AdminController@getPersonalData')->name('admin.get.personal');
    Route::get('admin/get-summary/{id}', 'AdminController@getSummary')->name('admin.get.summary');
    Route::post('admin/get-summary/new-advance', 'AdminController@submitAdvance')->name('admin.save.advance');
    
    //expence
    Route::get('admin/expence', 'AdminController@getExpence')->name('admin.expence');
    Route::post('admin/new-expence', 'AdminController@submitExpence')->name('admin.save.expence');
    Route::any('admin/logout', 'AdminController@logout')->name('logout');

    //event
    Route::get('admin/event', 'AdminController@getEvent')->name('admin.event');
    Route::post('admin/save-event', 'AdminController@submitEvent')->name('admin.save.event');


});





Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
