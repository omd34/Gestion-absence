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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::view('/Etudiant','Etudiant.EspaceEtudiant');

Route::view('/Administration','administration.administration');

//--------------  Espace Prof--------------------// 
Route::group(['prefix' => 'Prof' , 'namespace' => 'Prof'], function () {
    
    Route::get('/','ProfController@index')->name('home.prof');
    Route::get('/create-seance','ProfController@createSeance')->name('create.seance');
    Route::post('/save-seance','ProfController@saveSeance')->name('save.seance');
    Route::get('/list-seance','ProfController@listSeance')->name('list.seance');
    // Routes : Noter Absence
    Route::get('/noterabsence/{id}','ProfController@PageNoteAbsence')->name('pageAbsence');
    Route::post('/save-absence','ProfController@saveAbsence')->name('save.absence');
          
    // historique d'absence
    Route::get('/historiqueAbsence','ProfController@historiqueAbsence')->name('historique.absence');

});

//--------------  Espace Prof--------------------// 






//-------------------------Espace etudiant---------------------------//

Route::group(['prefix' => 'Etudiant' , 'namespace' => 'Etudiant'], function () {
//page d'acceuil etudiant 
Route::get('/','EtudiantController@index')->name('home.etudiant');

//declarer absence
Route::get('/declaration', 'EtudiantController@declarerabsence')->name('declaration.absence');

//historique absence
Route::get('/historiqueAbsence', 'EtudiantController@historiqueabsence')->name('historique.Absence');

//Sauvegardre la declaration de l'eleve
Route::post('/save-declaration', 'EtudiantController@saveDeclaration')->name('save.declaration');




});



//----------------------Espace etudiant------------------------------//





Route::get('/email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
Route::get('/email/verify/{id}/{hash}', 'Auth\VerificationController@verify') ->name('verification.verify');


