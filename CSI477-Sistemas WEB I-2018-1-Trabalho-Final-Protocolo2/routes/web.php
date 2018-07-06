<?php

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


Auth::routes();
Route::resource('/solicitacoes', 'SolicitacoesController');
Route::get('/', 'UsersController@index')->name('/');
Route::get('/2', 'UsersController@adminhome')->name('adminhome');
Route::get('/1', 'UsersController@userhome')->name('userhome');
Route::get('/adminlistarusers', 'UsersController@listaradmin')->name('adminlistar');
Route::get('/avaliarsolicitacoes', 'SolicitacoesController@avaliar_view')->name('avaliarsolicitacoes');
Route::get('/relatoriosolicitacoes', 'SolicitacoesController@gerar')->name('relatorio');
Route::get('/solicitar', 'SolicitacoesController@cadastrarview')->name('solicitar');
Route::get('/solicitar/arq', 'SolicitacoesController@cadastrarArqu')->name('enviarArq');
Route::get('/download', 'SolicitacoesController@getDownload');
