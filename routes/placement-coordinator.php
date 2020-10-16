<?php

Route::group(['namespace' => 'PlacementCoordinator'], function() {
    Route::get('/', 'HomeController@index')->name('placement-coordinator.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('placement-coordinator.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('placement-coordinator.logout');

    // Register
   // Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('placement-coordinator.register');
   // Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('placement-coordinator.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('placement-coordinator.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('placement-coordinator.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('placement-coordinator.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('placement-coordinator.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('placement-coordinator.verification.verify');

});