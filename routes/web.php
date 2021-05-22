<?php
//Rutas
use Illuminate\Support\Facades\Route;
use PhpParser\NodeVisitorAbstract;

//vistas

Route :: view('/index','index')->name('index');
Route :: view('/', 'index')->name('index');
Route :: view('/about', 'about')->name('about');
Route :: view('/contact', 'contact')->name('contact');
Route :: view('/profile', 'profile')->name('profile');
Route :: view('/changePassword','changePassword')->name('changePassword');



//rutas restfull

//Route :: get('/portfolio', 'portfoliocontroller@index')->name('portfolio.index');
Route :: get('/portfolio/create', 'portfoliocontroller@create')->name('portfolio.create');
Route :: post('/portfolio', 'portfoliocontroller@store')->name('portfolio.store');
Route :: get('/portfolio/{id}', 'portfoliocontroller@show')->name('portfolio.show');
Route :: get('/portfolio/{datos}/edit', 'portfoliocontroller@edit')->name('portfolio.edit');
Route :: patch('/portfolio/{datos}', 'portfoliocontroller@update')->name('portfolio.update');
Route :: delete('/portfolio/{datos}', 'portfoliocontroller@destroy')->name('portfolio.destroy');

//route consumo/chart
Route :: get('/portfolios', 'gestioncontroller@index')->name('portfolios');
//routa update contacto
Route ::patch('/profile/{datos}', 'usercontroller@update')->name('profile.update');
//routa mail
Route :: post('contact', 'mensajecontroller@store');
//ruta update password
Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
//routa  pdf
Route::get('/Port/Pdf/{id}', 'Pdfcontroller@pdf')->name('Port.pdf');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


