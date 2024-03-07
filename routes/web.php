<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/prova1', function () {
    $data = ['determino_io_il_nome' => 'io sono quello che vedi in pagina'];
    // $pluto = 123 || 'qwerty' o numero o stringa
    // $paperino = cose varie
    return view('prove.prova1', $data);
})->name('prova1');

Route::get('/prova2', function () {
    $lists = ['qwe', 'asd', 'zxc'];
    $list = compact('lists');
    return view('prove.prova2', $list);
})->name('prova2');
// nel return ci va sempre un array associativo, e quindi o dichiari una variabile semplice con numeri o stringhe e nel return gli passi 
// un array ad esmpio: return view('home', ['pippo' => $pluto]) PIPPO è il nome della variabile che userò nel file di vista, PLUTO è il nome della 
// varibile che userò su questo file vedi riga 21
//  oppure crei un array ASSOCIATIVO sopra, come riga 20, e nel return gli metti ($ + nome dell'array) vedi sotto
// // esempio: return view('home'{NOME FILE CHE FA SOLO DA VISTA} , $data)
// // NON SCORDARE MAI CHE è LA CHIAVE DELL'ARRAY CHE DETERMINA IL NOME DELLA VARIABILE CHE USERAI NEL FILE DI VISTA!!!
// ovviamente se la chiave è uguale al nome della variabile potrò usare la funzione compact('paperino') <-- questo equivale a scrivere
// ['paperino' => $paperino]