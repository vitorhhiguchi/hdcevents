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
    return view('products');
});

Route::get('/jagas', function(){
    return view('jagas');
});
