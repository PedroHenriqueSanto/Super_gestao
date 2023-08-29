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

// Route::get('/', function () {
//     return 'ola bom dia.';
// });
Route::get('/','PrincipalControllers@principal');

Route::get('/sobre-nos', 'SobreNosControllers@sobrenos' );

Route::get('/Contato', 'contatoControllers@contato' );



// controle de ações da ação route
// get
// post
// put
// patch
// delete
// options

/*
Route::(ação)get($uri (caminho),$callback (ação iintervepitada do servidor){
    retun 'ola';
});


*/
