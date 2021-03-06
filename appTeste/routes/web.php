<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('contato', function (){
    return "Página de Contato!";
});

Route::post('contato', function (){
   return "Realizando um Post!";
});

Route::put('contato', function (){
    return "Realizando um Put!";
});

Route::delete('contato', function (){
    return "Realizando um Delete!";
});

Route::match(['get', 'post'], 'sobre', function (){
    return "Trabalhando com match!";
});

Route::any('todos', function (){
    $url = url('nova');
    return "Trabalhando com any!" .$url;
});

Route::get('artigo/{id}', function($id){
    return "Artigo id: {$id}";
});

Route::get('produto/{id?}/cor/{cor?}', function($id = 12, $cor = "red"){
    return "Produto id: {$id} Cor = {$cor}";
});

Route::get('link', ['as' => 'link',function (){
    return 'Link <a href="'.route('detalhe').'">Detalhe</a>';
}]);

Route::get('sobre/detalhe', ['as' => 'detalhe',function (){
    return "teste";
}]);

Route::group(['prefix'=>'admin'], function(){
    Route::get('contato', function (){
        return "Página de Admin Contato!";
    });
    Route::get('sobre', function (){
        return "Página de Admin Sobre!";
    });
    Route::get('configuracao', function (){
        return "Página de Admin Configuracao!";
    });
});

Route::get('aluno','Aluno\AlunoController@index');

Route::get('livro',['uses' => 'LivroController@index', 'as' => 'livro.index']);

Route::get('produto', 'ProdutoController@index');

Route::get('home', function (){
    $usuarios = array(
        ["nome" => "Gustavo"],
        ["nome" => "Ana"],
        ["nome" => "Camila"],
        ["nome" => "Pedro"]
    );
    $livros = [];
   return view('home', compact('usuarios', 'livros'));
});

Route::get('usuario', ['uses' => 'UsuarioController@index', 'as' => 'usario']);
