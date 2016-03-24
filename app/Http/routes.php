<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('enderecos', 'EnderecoController');

Route::get('enderecos/delete/{id}', [
    'as' => 'enderecos.delete',
    'uses' => 'EnderecoController@destroy',
]);



Route::resource('pessoas', 'PessoaController');

Route::get('pessoas/delete/{id}', [
    'as' => 'pessoas.delete',
    'uses' => 'PessoaController@destroy',
]);


Route::resource('usuarios', 'UsuarioController');

Route::get('usuarios/delete/{id}', [
    'as' => 'usuarios.delete',
    'uses' => 'UsuarioController@destroy',
]);


Route::resource('perfils', 'PerfilController');

Route::get('perfils/delete/{id}', [
    'as' => 'perfils.delete',
    'uses' => 'PerfilController@destroy',
]);


Route::resource('coligadas', 'nucleo\ColigadaController');

Route::get('coligadas/delete/{id}', [
    'as' => 'coligadas.delete',
    'uses' => 'ColigadaController@destroy',
]);


Route::resource('tipo-cursos', 'nucleo\TipoCursoController');

Route::get('tipoCursos/delete/{id}', [
    'as' => 'tipoCursos.delete',
    'uses' => 'TipoCursoController@destroy',
]);
