 <?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Vitor";
    $idade = 19;
    $arr = [100,200,300,400,500];
    $nomes = ['Vitor', 'Goidin', 'Gozi', 'Felpo', 'Duzão', 'Jaguinha'];

    return view('welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => "Programador FullStack",
            'arr' => $arr,
            'nomes' => $nomes
        ]);
});

Route::get('/contact', function() {

    $nome = "Bobo";

    return view('contact', ['homeRun' => $nome]);
});

Route::get('/produtos', function() {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/jagas', function(){

    $busca = request('search');

    return view('jagas', ['busca' => $busca]);
});

Route::get('/produtos_te/{id?}', function($id = null) {
    return view('product', ['id' => $id]);
});

Route::get('jagas_teste/{id?}', function($id = null) {
    return view('jaga', ['id' => $id]);
});
