<?php



use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PublicController; 













//-------------------- PAGINA HOME PAGE  ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------





Route::get('/', [PublicController::class , 'homepage'])->name('paginaHomepage'); 




//-------------------------- PAGINA DETTAGLIO ------------------------------------------------------------------------------------------------------------------------------------------------------



Route::get('/detail{id}' , [PublicController::class , 'dettaglio'] )->name('paginaDettaglio'); 



//------------------------------ PAGINA INDICE ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------



Route::get('/index',  [PublicController::class , 'indice'] )->name('paginaIndice');


//--------------------------------------ROTTA DI CONTATTO---------------------------------------------------------------------

Route::get('/contactUs',  [PublicController::class , 'contattaci'] )->name('contact.us');






//-------------------------------------ROTTA POST----------------------------------------------------------------
// SERVE PER SPEDIRE DEI DATI

Route::post('/contactUs/submit' , [PublicController::class , 'submit'])->name('contact.submit'); 
// metodo della classe route
// funzionano esattamente come le rotte get, hanno un uri,controller e funzione











