<?php

Route::resource('tequio','TequioController');
Route::get('tequio/{tequio}/ver-asistencia-','TequioController@mostrarAsistenciaTequio')->name('tequio.asistenciatequios');



Route::resource('asamblea','AsambleaController');

Route::resource('cooperacion','CooperacionController');

Route::resource('ciudadano','CiudadanoController');

Route::resource('familiar','FamiliarController');

Route::get('ciudadano/{ciudadano}/agregar-familiar', 'FamiliarController@agregarFamiliarACiudadano')->name('familiar.ciudadano');

Route::get('ciudadano/{ciudadano}/ver-familiares','CiudadanoController@mostrarFamiliares')->name('ciudadano.familiares');

Route::resource('asistenciaasamblea','AsistenciaasambleaController');
Route::get('ciudadano/{ciudadano}/ver-asistencias-asamblea','CiudadanoController@mostrarAsistenciaasamblea')->name('ciudadano.asistenciaasambleas');

Route::resource('asistenciatequio','AsistenciatequioController');
//Route::get('ciudadano/{ciudadano}/agregar-asistencia', 'AsistenciatequioController@agregarAsistenciaACiudadano')->name('asistenciatequio.ciudadano');
Route::get('ciudadano/{ciudadano}/ver-asistencia-tequio','CiudadanoController@mostrarAsistenciatequio')->name('ciudadano.asistenciatequios');

Route::resource('asistenciacooperacione','AsistenciacooperacioneController');
Route::get('ciudadano/{ciudadano}/ver-asistencia-cooperacion','CiudadanoController@mostrarAsistenciacooperacion')->name('ciudadano.asistenciacooperaciones');





Route::get('/', function () {
    return view('welcome');
});

