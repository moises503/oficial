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

Route::get('pasar-lista/asamblea/{asamblea}',
    'ListasController@asamblea')->name('lista.asamblea');
Route::post('pasar-lista/asambleas/{asamblea}/asistencia',
    'ListasController@tomarAsistenciaAsamblea')->name('lista.asamblea.asistencia');
Route::get('pasar-lista/asambleas/{asamblea}/terminar',
    'ListasController@terminarAsamblea')->name('lista.asamblea.terminada');

Route::get('pasar-lista/tequio/{tequio}',
    'ListasController@tequio')->name('lista.tequio');
Route::post('pasar-lista/tequios/{tequio}/asistencia',
    'ListasController@tomarAsistenciaTequio')->name('lista.tequio.asistencia');
Route::get('pasar-lista/tequios/{tequio}/terminar',
    'ListasController@terminarTequio')->name('lista.tequio.terminada');

Route::get('ver-asistencias/cooperacion/{cooperacion}',
    'AsistenciasController@cooperacion')->name('asistencias.cooperacion');
Route::get('ver-asistencias/ciudadano/{ciudadano}/cooperaciones',
    'AsistenciasController@ciudadanoCooperacion')->name('asistencias.ciudadano.cooperacion');

Route::get('ver-asistencias/asamblea/{asamblea}',
    'AsistenciasController@asamblea')->name('asistencias.asamblea');
Route::get('ver-asistencias/ciudadano/{ciudadano}/asambleas',
    'AsistenciasController@ciudadanoAsamblea')->name('asistencias.ciudadano.asamblea');

Route::get('ver-asistencias/tequio/{tequio}',
    'AsistenciasController@tequio')->name('asistencias.tequio');
Route::get('ver-asistencias/ciudadano/{ciudadano}/tequios',
    'AsistenciasController@ciudadanoTequio')->name('asistencias.ciudadano.tequio');

Route::get('/', function () {
    return view('welcome');
});

