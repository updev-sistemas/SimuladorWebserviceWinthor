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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/PCSIS2699.EXE/soap/PC_Produto', 'WinthorController@PC_Produto');
Route::post('/PCSIS2699.EXE/soap/PC_Departamento', 'WinthorController@PC_Departamento');
Route::post('/PCSIS2699.EXE/soap/PC_Categoria', 'WinthorController@PC_Categoria');
Route::post('/PCSIS2699.EXE/soap/PC_SubCategoria', 'WinthorController@PC_SubCategoria');
Route::post('/PCSIS2699.EXE/soap/PC_Secao', 'WinthorController@PC_Secao');
Route::post('/PCSIS2699.EXE/soap/PC_Cliente', 'WinthorController@PC_Cliente');
Route::post('/PCSIS2699.EXE/soap/PC_Marca', 'WinthorController@PC_Marca');
Route::post('/PCSIS2699.EXE/soap/PC_Estoque', 'WinthorController@PC_Estoque');
Route::post('/PCSIS2699.EXE/soap/PC_Preco', 'WinthorController@PC_Preco');
Route::post('/PCSIS2699.EXE/soap/PC_Filial', 'WinthorController@PC_Filial');
Route::post('/PCSIS2699.EXE/soap/PC_Pedido', 'WinthorController@PC_Pedido');
