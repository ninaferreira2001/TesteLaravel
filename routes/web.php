<?php
use App\Http\Controllers\CadastroController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
// rotas de teste

Route::get('/home',function(){
    return view('base.index');
})->name('base.index');
Route::get('/contato',function(){
    return view('base.contato');
})->name('base.contato');

Route::post('/cadastro', function(Request $request){
    
    dd($request);
})->name('base.cadastro');

// cadastro

route::prefix('cadastro')->group(function(){
    Route::get('/',[CadastroController::class, 'index'])->name('cadastro.index');
    Route::get('/novo',[CadastroController::class, 'create'])->name('cadastro.create');
    Route::get('{id}/show',[CadastroController::class, 'show'])->name('cadastro.show');
    Route::get('{id}/editar',[CadastroController::class, 'edit'])->name('cadastro.edit');
    
    Route::post('/store',[CadastroController::class, 'store'])->name('cadastro.store');
    Route::post('{id}/update',[CadastroController::class, 'update'])->name('cadastro.update');
});

require __DIR__.'/auth.php';