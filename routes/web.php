<?php


Route::resource('members','MemberController');

Route::resource('tequio','TequioController');

Route::resource('asamblea','AsambleaController');

Route::resource('cooperacione','CooperacioneController');

Route::resource('ciudadano','CiudadanoController');

Route::resource('familiar','FamiliarController');

Route::resource('asistenciaasamblea','AsistenciaasambleaController');

Route::resource('asistenciatequio','AsistenciatequioController');

Route::resource('asistenciacooperacione','AsistenciacooperacioneController');


Route::get('/', function () {
    return view('welcome');
});

