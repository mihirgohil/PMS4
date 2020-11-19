<?php

Route::group(['namespace' => 'Company'], function() {
    Route::get('/', 'HomeController@index')->name('company.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('company.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('company.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('company.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('company.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('company.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('company.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('company.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('company.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('company.verification.verify');

    //Company homepage
    Route::get('/profile', 'HomeController@profile')->name('company.profile');
    Route::get('/addCoordinator', 'HomeController@addNewCoShow')->name('company.addCoordinator');
    Route::post('/addCoordinator/store', 'HomeController@addNewCoordinatorStore')->name('company.addNewCoordinatorStore');
    Route::get('/addpost', 'HomeController@addPost')->name('company.postInternship');
    Route::get('/workingInternship', 'HomeController@workingInternship')->name('company.workingInternship');
    Route::get('/history', 'HomeController@history')->name('company.history');
    Route::get('/givefeedback', 'HomeController@giveFeedback')->name('company.giveFeedback');
});