<?php

Route::resource('tequio','TequioController');

Route::resource('asamblea','AsambleaController');

Route::resource('cooperacion','CooperacionController');

Route::resource('ciudadano','CiudadanoController');

Route::resource('familiar','FamiliarController');

Route::get('ciudadano/{ciudadano}/agregar-familiar', 'FamiliarController@agregarFamiliarACiudadano')->name('familiar.ciudadano');

Route::get('ciudadano/{ciudadano}/ver-familiares','CiudadanoController@mostrarFamiliares')->name('ciudadano.familiares');

Route::resource('asistenciaasamblea','AsistenciaasambleaController');

Route::resource('asistenciatequio','AsistenciatequioController');

Route::resource('asistenciacooperacione','AsistenciacooperacioneController');





Route::get('/', function () {
    return view('welcome');
});

