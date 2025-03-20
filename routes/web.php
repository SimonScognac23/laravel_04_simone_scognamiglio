<?php



use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PublicController; 













//-------------------- PAGINA HOME PAGE  ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------





Route::get('/', [PublicController::class , 'homepage'])->name('paginaHomepage'); 




//-------------------------- PAGINA DETTAGLIO ------------------------------------------------------------------------------------------------------------------------------------------------------



Route::get('/detail{id}' , [PublicController::class , 'dettaglio'] )->name('paginaDettaglio'); 



//------------------------------ PAGINA INDICE ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------



Route::get('/index',  [PublicController::class , 'indice'] )->name('paginaIndice');









