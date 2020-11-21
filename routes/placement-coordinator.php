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

    //add new coordinator
    Route::get('/addNewCoordinator', 'HomeController@addNewCoordinatorShow')->name('placement-coordinator.addNewCo');
    Route::Post('/addNewCoordinator/store','HomeController@addNewCoordinatorStore')->name('placement-coordinator.addNewCo.store');

    //placement drive
    Route::get('/placementDrive', 'HomeController@addPlacementDrive')->name('placement-coordinator.placementDrive');
    Route::get('/addNewDrive', 'HomeController@addNewDrive')->name('placement-coordinator.addNewDrive');
    Route::post('/addNewDrive/Save', 'HomeController@addNewDriveSave')->name('placement-coordinator.addNewDriveSave');
    Route::post('/placementDrive/close', 'HomeController@closePlacementDrive')->name('placement-coordinator.closePlacementDrive');
    
    //profile
    Route::get('/profile', 'HomeController@pcprofile')->name('placement-coordinator.pcprofile');
    Route::get('/profile/edit', 'HomeController@editpcprofile')->name('placement-coordinator.editpcprofile');
    Route::post('/profile/update', 'HomeController@update')->name('placement-coordinator.updatepcprofile');
    
    //company
    Route::get('/addCompany', 'HomeController@addCompany')->name('placement-coordinator.addCompany');
    Route::post('/addCompany', 'HomeController@addCompanyStore')->name('placement-coordinator.addCompanyStore');

    Route::get('/manageCompany', 'HomeController@manageCompany')->name('placement-coordinator.manageCompany');

    Route::get('/editCompanySelect','HomeController@editCompanySelect')->name('placement-coordinator.editCompanySelect');
    Route::post('/editCompanySave','HomeController@editCompanySave')->name('placement-coordinator.editCompanySave');

    Route::get('/companyFeedback', 'HomeController@companyFeedback')->name('placement-coordinator.companyFeedback');
   
     //Student
    Route::get('/addStudent', 'HomeController@addStudent')->name('placement-coordinator.addStudent');
    Route::post('/addStudent', 'HomeController@addStudentStore')->name('placement-coordinator.addStudentStore');
    
    Route::get('/manageStudentSelectDrive', 'HomeController@manageStudentSelectDrive')->name('placement-coordinator.manageStudentDrive');
    Route::get('/manageStudent', 'HomeController@manageStudent')->name('placement-coordinator.manageStudent');  

    Route::get('/unplacedStudent','HomeController@unplacedStudent')->name('placement-coordinator.unplacedStudent');
    Route::get('/placedStudent','HomeController@placedStudent')->name('placement-coordinator.placedStudent');
    Route::get('/optoutStudent','HomeController@optoutStudent')->name('placement-coordinator.optoutStudent'); 

    Route::get('/editStudentSelect', 'HomeController@editStudentSelect')->name('placement-coordinator.editStudentSelect');
    Route::post('/editStudentSave', 'HomeController@editStudentSave')->name('placement-coordinator.editStudentSave');
    
    Route::get('/studentFeedback', 'HomeController@studentFeedback')->name('placement-coordinator.studentFeedback');

    //internship
    Route::get('/internship', 'HomeController@pcinternship')->name('placement-coordinator.pcinternship');
    Route::post('/internship/save', 'HomeController@internshipSave')->name('placement-coordinator.addNewpost.Store');

    Route::get('/managepublishSelectDrive', 'HomeController@managePublishSelectDrive')->name('placement-coordinator.managePublishSelectDrive');
    Route::get('/managepublish', 'HomeController@manageinternship')->name('placement-coordinator.managePublish');
    Route::get('/managepublished','HomeController@managepublished')->name('placement-coordinator.managePublished');
    
    Route::get('/editInternshipPost','HomeController@editInternshipPost')->name('placement-coordinator.editInternship');
    Route::post('/editInternshipPostSave','HomeController@editInternshipPostSave')->name('placement-coordinator.editInternshipSave');

    Route::get('/InternshipPostPublish','HomeController@publishInternshipPost')->name('placement-coordinator.publishInternship');
    Route::get('/InternshipPostClosed','HomeController@ViewClosedInternshipPost')->name('placement-coordinator.ViewClosedInternshipPost');
});