<?php

Route::resource('tequio','TequioController');

Route::resource('asamblea','AsambleaController');

Route::resource('cooperacion','CooperacionController');

Route::resource('ciudadano','CiudadanoController');

Route::resource('familiar','FamiliarController');

Route::get('ciudadano/{ciudadano}/agregar-familiar', 'FamiliarController@agregarFamiliarACiudadano')->name('familiar.ciudadano');

Route::get('ciudadano/{ciudadano}/ver-familiares','CiudadanoController@mostrarFamiliares')->name('ciudadano.familiares');

Route::get('pasar-lista/cooperaciones/{cooperacion}',
    'ListasController@cooperacion')->name('lista.cooperacion');
Route::post('pasar-lista/cooperaciones/{cooperacion}/asistencia',
    'ListasController@tomarAsistenciaCooperacion')->name('lista.cooperacion.asistencia');
Route::get('pasar-lista/cooperaciones/{cooperacion}/terminar',
    'ListasController@terminarCooperacion')->name('lista.cooperacion.terminada');

Route::get('ver-asistencias/cooperacion/{cooperacion}',
    'AsistenciasController@cooperacion')->name('asistencias.cooperacion');
Route::get('ver-asistencias/ciudadano/{ciudadano}/cooperaciones',
    'AsistenciasController@ciudadanoCooperacion')->name('asistencias.ciudadano.cooperacion');

Route::get('/', function () {
    return view('welcome');
});

