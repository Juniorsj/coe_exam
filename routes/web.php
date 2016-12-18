<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'IndexController@index');
Route::get('computer', 'ComputerController@index')->name('computer');
Route::get('material', 'MaterialController@index')->name('material');
Route::get('drawing', 'DrawingController@index')->name('drawing');
Route::get('mechanic', 'MechanicController@index')->name('mechanic');
Route::get('theory-structure', 'TheoryStructureController@index')->name('theory.structure');
Route::get('structure-analysis', 'StructuralAnalysisController@index')->name('structure.analysis');
Route::get('reinforce-concrete', 'ReinforcedConcreteDesignController@index')->name('reinforce.concrete');
Route::get('timber-steel', 'TimberSteelDesignController@index')->name('timber.steel');
Route::get('soil', 'SoilController@index')->name('soil');
Route::get('construction', 'ConstructionController@index')->name('construction');
Route::get('environmental', 'EnvironmentalController@index')->name('environmental');


