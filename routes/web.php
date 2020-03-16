<?php

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');

//----------AdminConroller start----------
Route::get('/dashboard', 'SuperAdminController@index');
Route::get('/admin', 'AdminController@index');
Route::post('/admin-login', 'AdminController@admin_dashboard');
Route::get('/logout', 'SuperAdminController@logout');
Route::get('/admin_show', 'AdminController@admin_show');

//------------------Product Controller-----------------------
Route::get('/addProduct', 'ProductController@addporduct');
Route::post('/save_product', 'ProductController@product_store');
Route::get('/show-product/', 'ProductController@show_product');
Route::get('/unactive_product/{id}', 'ProductController@unactive_product');
Route::get('/active_product/{id}', 'ProductController@active_product');


//Product order Admin controller
Route::get('/showorder', 'OrderController@ShowOrder')->name('showOrder');
Route::get('/orderview', 'OrderController@orderview')->name('orderview');


//--------------Category Controller--------------------------
Route::get('/addCategory', 'CategoryController@add');
Route::post('/save_category', 'CategoryController@category_store');
Route::get('/show_category', 'CategoryController@show_category');
Route::get('/eidt_category/{id}', 'CategoryController@edit_category');
Route::post('/update-category/{id}', 'CategoryController@update_category');
Route::get('/delete_category/{id}', 'CategoryController@delete_category');
Route::get('/unactive_cat/{id}', 'CategoryController@unactive_cat');
Route::get('/active_cat/{id}', 'CategoryController@active_cat');


//----------Brand Controller-------------------
Route::get('/addBrand', 'BrandController@add');
Route::post('/save_brand', 'BrandController@brand_store');
Route::get('/show_brand', 'BrandController@show_Brand');
Route::get('/eidt_brand/{id}', 'BrandController@edit_brand');
Route::post('/update-brand/{id}', 'BrandController@update_brand');
Route::get('/delete-brand/{id}', 'BrandController@delete_brand');

//Slider controller------------------
Route::get('/add_slider', 'ImageSliderController@index');
Route::post('/save_slider', 'ImageSliderController@store');
Route::get('/show_slider', 'ImageSliderController@show_slider');
Route::get('/delete_slider/{id}', 'ImageSliderController@delete_slider');
Route::get('/unactive_slider/{id}', 'ImageSliderController@unactive_slider');
Route::get('/active_slider/{id}', 'ImageSliderController@active_slider');

//----------show products in user page
Route::get('/product_by_category/{id}', 'PagesController@show_product_by_category')->name('product_by_category');
Route::get('/product_by_brand/{id}', 'PagesController@show_product_by_brand')->name('product_by_brands');
Route::get('/details_product/{id}', 'PagesController@details_product')->name('product-details');

//cart controller
Route::post('add-to-cart', 'CartController@addToCart')->name('add.to.cart');
Route::get('/add-to-cart', 'CartController@showCart')->name('cart.show');
Route::post('/cartremove', 'CartController@cartRemove')->name('remove.to.cart');
Route::get('/checkout', 'CartController@checkout')->name('checkout');
Route::post('/confirm-order', 'CartController@order')->name('order.confirm');

//------------User Controller---------------
Route::get('/register', 'UserControllerController@userRegister')->name('register');
Route::post('/register', 'UserControllerController@save_register');

Route::get('/user-login', 'UserControllerController@userlogin')->name('user-login');
Route::post('/user-login', 'UserControllerController@login');
Route::get('/userlogout', 'UserControllerController@userlogout')->name('userlogout');
Route::get('/search', 'PagesController@search')->name('search');


// user Profile Controller
Route::get('/userprofile', 'userprofileController@index')->name('profile');