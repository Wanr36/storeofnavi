<?php


Route::get('/index', 'MainPageController@Index');
Route::get('/', 'MainPageController@Index');
Route::get('/application', 'ApplicationPageController@Index');
Route::get('/myprofile', 'MyprofilePageController@Index');
Route::get('/disciplines', 'DisciplinesPageController@Index');
Route::get('/faq', 'FaqPageController@Index');
Route::get('/feedback', 'FeedBackPageController@Index');
Route::get('/question', 'QuestionPageController@Index');
Route::get('/contacts', 'ContactsPageController@Index');

Route::get('auth/login', 'Auth\LoginController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::post('/register', 'Auth\RegistrationController@Index');
// такой маршрут  auth/register у нас уже есть в router.php, его надо изменить на этот
Route::get('register/confirm/{token}','Auth\RegisterConfirmController@confirm');

Route::get('password/email', 'Auth\ResetPasswordController@getEmail');
Route::post('password/email', 'Auth\ResetPasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@getReset');
Route::post('password/reset', 'Auth\ResetPasswordController@postReset');
Route::post('/search','SearchMainController@Index');

Route::group(['prefix'=>'adminzone'], function()
{
    Route::get('/', 'AdminDashboardController@Index');
    Route::get('/index', 'AdminDashboardController@Index');

    Route::get('/login', 'AdminLoginController@Index');
    Route::post('/login', 'AdminLoginController@InputOnSystem');

    Route::get('/logout', 'AdminLoginController@Logout');

    Route::get('/course', 'AdminDisciplinesController@Index');
    Route::post('/course','AdminDisciplinesController@store' );
    Route::get('/select_course','AdminDisciplinesController@select_course' );

    Route::get('/application', 'AdminApplicationController@Index');
    Route::get('/users', 'AdminUsersController@Index');
    Route::get('/reviews', 'AdminReviewsController@Index');
    Route::get('/comments', 'AdminCommentsController@Index');

    Route::get('/messege', 'AdminMessegeController@Index');
    Route::get('/question', 'AdminQuestionController@Index');
    Route::delete('/question/{id}','AdminQuestionController@destroy');
    Route::get('/question/getQuestion', 'AdminQuestionController@getQuestion');
    Route::get('/myprofile', 'AdminMyprofileController@Index');
});
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
