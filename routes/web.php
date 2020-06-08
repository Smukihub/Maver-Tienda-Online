<?php
use App\Product;
use App\Category;
use App\Image;


//para hacer las pruebas con las imagenes.
Route::get('/prueba', function () {

    //20 eliminar todas las imagenes

    $product = App\Product::with('images','category')->get();
   
    return $product;
    

});
    
//mostrar resultados
Route::get('/resultados', function () {

   $image = App\Image::orderBy('id','Desc')->get();
   return  $image; 
});




Route::get('/', function () {



return view('tienda.index');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', function () {
    return view('plantilla.admin');
})->name('admin');

Route::resource('admin/category', 'Admin\AdminCategoryController')->names('admin.category');

Route::resource('admin/product', 'Admin\AdminProductController')->names('admin.product');


Route::get('cancelar/{ruta}', function($ruta) {
    return redirect()->route($ruta)->with('cancelar','Acción Cancelada!');
})->name('cancelar');