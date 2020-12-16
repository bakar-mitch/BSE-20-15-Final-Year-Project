<?php
//use Route;
Route::get('/', 'TicketController@create');
Route::get('/home', function () {
    $route = Gate::denies('dashboard_access') ? 'admin.tickets.index' : 'admin.home';
    if (session('status')) {
        return redirect()->route($route)->with('status', session('status'));
    }

    return redirect()->route($route);
});

Auth::routes(['register' => false]);

Route::post('tickets/media', 'TicketController@storeMedia')->name('tickets.storeMedia');
Route::post('tickets/comment/{ticket}', 'TicketController@storeComment')->name('tickets.storeComment');
Route::resource('tickets', 'TicketController')->only(['show', 'create', 'store']);


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Statuses
    Route::delete('statuses/destroy', 'StatusesController@massDestroy')->name('statuses.massDestroy');
    Route::resource('statuses', 'StatusesController');

    // Priorities
    Route::delete('priorities/destroy', 'PrioritiesController@massDestroy')->name('priorities.massDestroy');
    Route::resource('priorities', 'PrioritiesController');

    // Categories
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');

    // Tickets
    Route::delete('tickets/destroy', 'TicketsController@massDestroy')->name('tickets.massDestroy');
    Route::post('tickets/media', 'TicketsController@storeMedia')->name('tickets.storeMedia');
    Route::post('tickets/comment/{ticket}', 'TicketsController@storeComment')->name('tickets.storeComment');
    Route::resource('tickets', 'TicketsController');

    // Comments
    Route::delete('comments/destroy', 'CommentsController@massDestroy')->name('comments.massDestroy');
    Route::resource('comments', 'CommentsController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    //invoices
    //Route::get('invoices/create','InvoicesController@create')->name('invoices.create');

    
//Payments routes
Route::get('payments/payment','PaymentController@payment')->name('payments.index');
Route::resource('payments', 'PaymentController')->only(['show', 'create', 'store']);
Route::get('payments/payment','PaymentsController@index')->name('payments.index');

//Donations routes
Route::get('donations/donation','DonationController@donation')->name('donations.index');
Route::resource('donations', 'DonationController')->only(['show', 'create', 'store']);

});
// donations by clients
Route::get('donations/create','DonationController@display')->name('donations.create');
Route::get('payments/create','PaymentController@create')->name('payments.create');
Route::post('donations/store','DonationController@store')->name('donations.store');
Route::get('donations/show/{donation_id}/{project_id}', 'DonationController@show')->name('donations.show');

//Payments by clients
Route::get('payments/payment','PaymentController@payment')->name('payments.payment');
Route::post('payments/store','PaymentController@store')->name('payments.store');
Route::get('payments/show/{payment_id}/{project_id}', 'PaymentController@show')->name('payments.show');



 // Reports and charts
 Route::get('/testdata','ChartController@testdata')->name('charts.testdata');
 Route::get('/tk','ChartController@ticket_against_id')->name('charts.ticket_against_id');
 Route::get('/status','ChartController@status_id_against_title')->name('charts.status_id_against_title');
 Route::get('/date','ChartController@tickets_created_date')->name('charts.tickets_created_date');
 Route::get('/me','ChartController@id_against_category_id')->name('charts.id_against_category_id');
 Route::get('charts/chart','ChartController@index')->name('charts.index');

Route::middleware(['auth'])->group(function () {
    Route::get('invoices/create', 'InvoiceController@index')->name('invoices.index');
});
