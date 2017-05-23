<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Institucional'], function(){
    Route::controller('institucional', 'InstitucionalController', [
        'getSobre' => 'sobre',
        'getContato' => 'contato',
        'postContato' => 'contato.send'
    ]);
});


Route::get('volunteer', function(){
    return view('volunteers.form');
});

Route::post('volunteer',['as' => 'volunteer.send', function(){
    return Request::all();
}]);

/*// definição sem o verbo HTTP
Route::group(['prefix' => 'institucional'], function(){

    Route::get('sobre', ['as' => 'sobre', 'uses' => 'InstitucionalController@sobre']);

    Route::get('contato', ['as' => 'contato', 'uses' => 'InstitucionalController@contato' ]);

    Route::post('contato', ['as' => 'contato.send','uses' => 'InstitucionalController@contatoEnviado']);
});
*/

//passando parametros não obrigatorios na URL
/*Route::get('teste/{nome}/{sobrenome?}', function ($nome, $sobrenome = 'Sr.') {
    return "Treinaweb, $sobrenome, $nome";
});*/

//validando na rota
/*Route::get('teste/{nome}/{id}', function ($nome, $id) {
    return "Treinaweb, $nome, $id";
})->where('id', '[0-9]+'); //permitindo a entrada apenas de numeros*/
