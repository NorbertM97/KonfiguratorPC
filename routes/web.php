<?php

Route::get('/', 'WelcomeController@goToWelcome');

Route::get('/firststep', 'FirstStepController@goToFirstStep');

Route::get('/addCoverToCart', 'CartController@addCoverToCart');

Route::get('/secondstep', 'SecondStepController@goToSecondStep');

Route::get('/addMBToCart', 'CartController@addMBToCart');

Route::get('/addCpuToCart', 'CartController@addCPUToCart');

Route::get('/addRamToCart', 'CartController@addRamToCart');

Route::get('/addGpuToCart', 'CartController@addGpuToCart');

Route::get('/addHddToCart', 'CartController@addHddToCart');

Route::get('/addPsuToCart', 'CartController@addPsuToCart');

Route::get('/thirdstep', 'ThirdStepController@goToThirdStep');

Route::get('/fourthstep', 'FourthStepController@goToFourthStep');

Route::get('/fifthstep', 'FifthStepController@goToFifthStep');

Route::get('/sixthstep', 'SixthStepController@goToSixthStep');

Route::get('/seventhstep', 'SeventhStepController@goToSeventhStep');

Route::get('/laststep', 'LastStepController@goToLastStep');

Route::get('/coverFilter', 'FilterController@coverFilter');

Route::get('/laststep/print-pdf', [ 'as' => 'item.printpdf', 'uses' => 'CartController@printPDF']);

Auth::routes();


//home
Route::get('/admin', 'Admin\HomeController@index')->name('adminHome');

// Covers
Route::get('/admin/covers', 'Admin\CoversController@index')->name('adminCovers');
Route::get('/admin/covers/add', 'Admin\CoversController@getAdd')->name('adminCoversAdd');
Route::post('/admin/covers/add', 'Admin\CoversController@postAdd')->name('adminCoversPostAdd');
Route::post('/admin/covers/delete', 'Admin\CoversController@postDelete')->name('adminCoversDelete');


//Motherboards
Route::get('/admin/motherboard', 'Admin\MotherboardController@index')->name('adminMotherboard');
Route::get('/admin/motherboard/add', 'Admin\MotherboardController@getAdd')->name('adminMotherboardAdd');
Route::post('/admin/motherboard/add', 'Admin\MotherboardController@postAdd')->name('adminMotherboardPostAdd');
Route::post('/admin/motherboard/delete', 'Admin\MotherboardController@postDelete')->name('adminMotherboardDelete');


//Procesors
Route::get('/admin/procesors', 'Admin\ProcesorsController@index')->name('adminProcesors');
Route::get('/admin/procesors/add', 'Admin\ProcesorsController@getAdd')->name('adminProcesorsAdd');
Route::post('/admin/procesors/add', 'Admin\ProcesorsController@postAdd')->name('adminProcesorsPostAdd');
Route::post('/admin/procesors/delete', 'Admin\ProcesorsController@postDelete')->name('adminProcesorsDelete');


//Ram
Route::get('/admin/ram', 'Admin\RamController@index')->name('adminRam');
Route::get('/admin/ram/add', 'Admin\RamController@getAdd')->name('adminRamAdd');
Route::post('/admin/ram/add', 'Admin\RamController@postAdd')->name('adminRamPostAdd');
Route::post('/admin/ram/delete', 'Admin\RamController@postDelete')->name('adminRamDelete');


//Graphics Cards
Route::get('/admin/gpu', 'Admin\GpuController@index')->name('adminGpu');
Route::get('/admin/gpu/add', 'Admin\GpuController@getAdd')->name('adminGpuAdd');
Route::post('/admin/gpu/add', 'Admin\GpuController@postAdd')->name('adminGpuPostAdd');
Route::post('/admin/gpu/delete', 'Admin\GpuController@postDelete')->name('adminGpuDelete');


//Disks
Route::get('/admin/disks', 'Admin\DisksController@index')->name('adminDisks');
Route::get('/admin/disks/add', 'Admin\DisksController@getAdd')->name('adminDisksAdd');
Route::post('/admin/disks/add', 'Admin\DisksController@postAdd')->name('adminDisksPostAdd');
Route::post('/admin/disks/delete', 'Admin\DisksController@postDelete')->name('adminDisksDelete');


//Cooler
Route::get('/admin/cooler', 'Admin\CoolerController@index')->name('adminCooler');
Route::get('/admin/cooler/add', 'Admin\CoolerController@getAdd')->name('adminCoolerAdd');
Route::post('/admin/cooler/add', 'Admin\CoolerController@postAdd')->name('adminCoolerPostAdd');
Route::post('/admin/cooler/delete', 'Admin\CoolerController@postDelete')->name('adminCoolerDelete');