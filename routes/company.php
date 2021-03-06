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

    //Profile
    Route::get('/profile', 'HomeController@profile')->name('company.profile');
    Route::get('/profile/edit', 'HomeController@editprofile')->name('company.editprofile');
    Route::post('/profile/update', 'HomeController@updateProfile')->name('company.updateprofile');
    

    Route::get('/addCoordinator', 'HomeController@addNewCoShow')->name('company.addCoordinator');
    Route::post('/addCoordinator/store', 'HomeController@addNewCoordinatorStore')->name('company.addNewCoordinatorStore');
    
    //Internship
    Route::get('/addpost', 'HomeController@addPost')->name('company.postInternship');
    Route::post('/addpost/store', 'HomeController@addPostSave')->name('company.addNewpost.store');

    Route::get('/workingInternship', 'HomeController@workingInternship')->name('company.workingInternship');
    Route::get('/history', 'HomeController@history')->name('company.history');

    Route::get('/docloseInternship','HomeController@DoCloseInternship')->name('company.DoCloseInternship');

    Route::get('/editInternshipPost','HomeController@editInternshipPost')->name('company.editInternship');
    Route::post('/editInternshipPostSave','HomeController@editInternshipPostSave')->name('company.editInternshipSave');

    Route::get('/studentApplied','HomeController@studentApplied')->name('company.studentApplied');
    Route::get('/studentAppliedHistory','HomeController@studentAppliedHistroy')->name('company.studentAppliedHistory');
    
    Route::get('/studentSelected','HomeController@studentSelected')->name('company.studentSelected');
    //feedback
    Route::get('/givefeedback', 'HomeController@giveFeedback')->name('company.giveFeedback');
    Route::post('/feedback/save', 'HomeController@feedbackSave')->name('company.feedback.Save');
});