<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('home');

Route::get('/testvue', function() {
    return view('testvue');
});
Route::get('/mappingd3js', function() {
    return view('admin.hierarchy.mapping');
});


Route::post('subscriber','SubscriberController@store')->name('subscriber.store');

Auth::routes();

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'admin', 'middleware' => ['auth', 'admin']], function ()
{

    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('hierarchy','HierarchyController@index')->name('hierarchy.index'); 
    Route::get('hierarchy/showall','HierarchyController@showall')->name('hierarchy.showall'); 


    //d3js
    Route::get('hierarchy/mapping','HierarchyController@mapping')->name('hierarchy.mapping'); 
      
    Route::get('thesaurus','ThesaurusController@index')->name('thesaurus.index');   
    
    //ke halaman setting akun
    Route::get('settings', 'SettingsController@index')->name('settings'); 

      
    Route::put('profile-update', 'SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update', 'SettingsController@updatePassword')->name('password.update');
    Route::get('hierarchy/{id}/wordmap', 'HierarchyController@wordmap')->name('hierarchy.wordmap');   
//make d3js    Route::get('hierarchy/mapping', 'HierarchyController@mapping')->name('hierarchy.mapping');
//    Route::get('thesaurus/{id}/wordmap', 'ThesaurusController@wordmap')->name('thesaurus.wordmap');
    Route::get('thesaurus/disablewords','ThesaurusController@disablewords')->name('thesaurus.disablewords');      
    Route::get('thesaurus/disablewords/{id}/enableword', 'ThesaurusController@enableword')->name('thesaurus.enableword');
    Route::get('thesaurus/{id}/disableword', 'ThesaurusController@disableword')->name('thesaurus.disableword');
    
    Route::get('searchthesaurus', 'HierarchyController@search');

    //autocomplete
    Route::get('autocomplete', array('as'=>'autocomplete','uses'=>'HierarchyController@autocomplete'));
   
    
    //import file excel
    Route::get('import','ImportController@store')->name('import.index');
    //

    Route::resource('tag','TagController');
    Route::resource('category','CategoryController');
    Route::resource('post','PostController');
    Route::resource('import','ImportController');
    Route::resource('hierarchy', 'HierarchyController');
    Route::resource('thesaurus', 'ThesaurusController');


    //Approval Thesaurus by admin
    Route::get('pending/post', 'PostController@pending')->name('post.pending');
    Route::put('/thesaurus/{id}/approve', 'ThesaurusController@approval')->name('thesaurus.approve');
    

    Route::get('pending/post', 'PostController@pending')->name('post.pending');
    Route::put('/post/{id}/approve', 'PostController@approval')->name('post.approve');
    
    Route::get('/subscriber','SubscriberController@index')->name('subscriber.index');
    Route::delete('/subscriber/{subscriber}','SubscriberController@destroy')->name('subscriber.destroy');

});




Route::group(['as' => 'author.','prefix' => 'author', 'namespace' => 'author', 'middleware' => ['auth', 'author']], function ()
{
    Route::get('dashboard','DashboardController@index')->name('dashboard');    
    Route::get('hierarchy','HierarchyController@index')->name('hierarchy.index');   
    Route::get('thesaurus','ThesaurusController@index')->name('thesaurus.index');   


    Route::get('settings', 'SettingsController@index')->name('settings');   
    Route::put('profile-update', 'SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update', 'SettingsController@updatePassword')->name('password.update');

    Route::get('hierarchy/{id}/wordmap', 'HierarchyController@wordmap')->name('hierarchy.wordmap');
    Route::get('hierarchy/disablewords','HierarchyController@disablewords')->name('hierarchy.disablewords');      
    Route::get('hierarchy/disablewords/{id}/enableword', 'HierarchyController@enableword')->name('hierarchy.enableword');
    Route::get('hierarchy/{id}/disableword', 'HierarchyController@disableword')->name('hierarchy.disableword');
    
    Route::get('hierarchy/mapping', 'HierarchyController@mapping')->name('hierarchy.mapping');
//    Route::get('thesaurus/{id}/wordmap', 'ThesaurusController@wordmap')->name('thesaurus.wordmap');
    Route::get('thesaurus/disablewords','ThesaurusController@disablewords')->name('thesaurus.disablewords');      
    Route::get('thesaurus/disablewords/{id}/enableword', 'ThesaurusController@enableword')->name('thesaurus.enableword');
    Route::get('thesaurus/{id}/disableword', 'ThesaurusController@disableword')->name('thesaurus.disableword');


    
    Route::resource('hierarchy', 'HierarchyController');
    Route::resource('thesaurus', 'ThesaurusController');
    
    Route::resource('post','PostController');
});
