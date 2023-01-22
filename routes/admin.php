
<?php
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

//Whiteboard
Route::post('whiteboard/permissions/{whiteboard?}', 'WhiteboardController@permissions')->name('whiteboard.permissions');
Route::get('whiteboard/get-edit/{whiteboard?}', 'WhiteboardController@getEdit')->name('whiteboard.getEdit');
Route::resource('whiteboard', 'WhiteboardController')->except('store');
