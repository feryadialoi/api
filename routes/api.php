<?php

use Illuminate\Http\Request;
use App\Item;

Route::get('items', function () {
    // return [
    //     'message' => 'ini adalah items',
    // ];

    // return Item::all();
    return Item::paginate(5);
});

//searching data by id
// Route::get('items/{item}', function ($id) {

//     return Item::find($id);
// });

//route model binding
Route::get('items/{item}', function (Item $item) {

    return $item;
});

//adding new data
Route::post('items', function () {

    return Item::create(request()->all());
});

//delete data by id use route model binding
Route::delete('items/{item}', function (Item $item) {

    $item->delete();
    return 'success';
});

//update data by id use route model binding
Route::patch('items/{item}', function ($id) {

    $update = Item::find($id);
    $update->update(request()->all());
    return $update;
});
