 
 <?php 

 use Illuminate\Support\Facades\Route;

 Route::get('/visualizza', function () {
    return  view ('visualizza');});
    Route::get('/crea', function () {
        return  view ('crea');});
        Route::get('/dettaglio', function () {
            return  view ('dettaglio');});
            Route::get('/elimina', function () {
                return  view ('elimina');});
                Route::get('/modifica', function () {
                    return  view ('modifica');});

   