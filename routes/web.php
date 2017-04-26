<?php

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
});

// Route::get('/', function() {
//     return redirect('cat');
// });

Route::get('cats', function() {
    $cats = furbook\Cat::all();
    return view('cats.index')->with('cats',$cats);
});

Route::get('cats/breeds/{name}', function($name) {
    $breed = furbook\Breed::with('cats')
        ->whereName($name)
        ->first();

    $colnames = furbook\Cat::getTableColumns();

    // foreach($breed->cats as $key => $cat)
    // {
    //     var_dump($cat->date_of_birth);
    // }

    // // var_dump($breed->cats->toarray()["date_of_birth"]);
    // exit;

    return view('cats.index')
        ->with('breed',$breed)
        ->with('cats',$breed->cats)
        ->with('colnames',$colnames);
    
});

Route::get('cats/{id}', function($id) {
    return sprintf('Cat #%s', $id);
})->where('id','[0-9]+');

Route::get('about',function(){
    return view('about')->with('numberofcats',9000);
});
