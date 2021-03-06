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
    return view('layouts.proto');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' =>'gv'], function () {


Route::get('/board','BoardController@index')->middleware('gv');
// ROUTE MODULE DE STAT -----------------------------------------------------------------------------------------------------
// GENERAL ------------------------------------------------------------------------------------------------------------------
Route::get('/stat/general','StatController@general')->name('statGeneral')->middleware('gv');
// FAMILLE ------------------------------------------------------------------------------------------------------------------
Route::resource('/stat/famille', 'FamilleController');
Route::any('/stat/filtre/famille/{famille}', 'FamilleController@setFiltreCat')->middleware('gv');
Route::any('/stat/pagination/famille/{state}', 'FamilleController@setPaginationCat')->middleware('gv');
// TECH ---------------------------------------------------------------------------------------------------------------------
Route::get('/stat/user/{job}/{user}/{year}','StatController@disptachJob')->middleware('gv');
// ENVOIE -------------------------------------------------------------------------------------------------------------------
Route::get('stat/envoie/show/{bl}/{l}', 'CommandSentClassifyController@show')->name('showBlInteger');
Route::get('stat/envoie/edit/{id}/{arg}/{value}', 'CommandSentClassifyController@edit')->name('editBl');
Route::get('stat/envoie', 'CommandSentClassifyController@index')->name('statEnvoie');
// INTEGRATION --------------------------------------------------------------------------------------------------------------
Route::any('integration/unique/{bl}', 'CommandSentClassifyController@LogicExecutionOnBl')->name('integerBl');
Route::any('integration/day/{dt}', 'CommandSentClassifyController@LogicExecutionOnDay')->name('integerDay');
Route::any('integration/week/{dt}', 'CommandSentClassifyController@LogicExecutionOnWeek')->name('integerWeek');
Route::any('integration/month/{dt}', 'CommandSentClassifyController@LogicExecutionOnMonth')->name('integerMonth');
Route::any('integration/year/{dt}', 'CommandSentClassifyController@LogicExecutionOnYear')->name('integerYear');
Route::get('integration/delete/specific/{bl}','CommandSentClassifyController@destroyBl');
Route::get('integration/delete/order/{order}/{dt}','CommandSentClassifyController@disptachDestroy')->name('deleteInteger');
// CALENDRIER ---------------------------------------------------------------------------------------------------------------
Route::get('calender/integration/dt/{controller}/{dt}','CalenderController@selectDt');
Route::get('calender/integration/sub/month/{controller}','CalenderController@subMonth');
Route::get('calender/integration/sub/year/{controller}','CalenderController@subYear');
Route::get('calender/integration/add/month/{controller}','CalenderController@addMonth');
Route::get('calender/integration/add/year/{controller}','CalenderController@addYear');
Route::get('calender/integration/select/year/{controller}/{year}','CalenderController@selectYear');
Route::get('calender/integration/select/month/{controller}/{month}','CalenderController@selectMonth');
// --------------------------------------------------------------------------------------------------------------------------

// INCIDENT ---------------------------------------------------------------------------------------------------------------------------
Route::resource('/incident', 'IncidentController');
Route::get('/incidents', ['as'=>'incidents','uses' => 'IncidentController@incidentUser']);
Route::any('/viewer/incidents/set/{x}', array('as' =>'mkviewer' ,'uses'=>'IncidentController@MakeViewer'));
Route::any('/viewer/incidents/remove', array('as' =>'delviewer' ,'uses'=>'IncidentController@RemoveViewer'));
// ------------------------------------------------------------------------------------------------------------------------------------

// RECHERCHE ---------------------------------------------------------------------------------------------------------------------------
Route::post('/recherche', ['as'=>'search','uses' => 'SearchController@index']);
// ------------------------------------------------------------------------------------------------------------------------------------

// CATEGORIE -------------------------------------------------------------------------------------------------------------------------
Route::get('/categorie','CategorieController@index');
// ------------------------------------------------------------------------------------------------------------------------------------
// REDIS CATEGORIE -------------------------------------------------------------------------------------------------------------------------
Route::get('/redis/categorie','redisController@categorie');
Route::get('/redis/test','redisController@test');
Route::get('/redis/del/categorie','redisController@deleteCategorie');
// ------------------------------------------------------------------------------------------------------------------------------------
Route::get('/locator', 'locatorController@index');
Route::get('/locator/depot', 'locatorController@depot');
Route::post('/locator/filtre', 'locatorController@filtreStoreArticle');
Route::post('/locator', 'locatorController@store');

Route::get('/locator/recherche', 'locatorController@noSession');

Route::get('/locator/multi', 'locatorController@getMulti');
Route::post('/locator/multi', 'locatorController@postMultiId');

Route::get('/locator/multi/out', 'locatorController@getMultiOut');
Route::post('/locator/multi/out', 'locatorController@postMultiOut');

Route::get('/locator/multi/deplacement', 'locatorController@getMultiDeplacement');
Route::post('/locator/multi/deplacement', 'locatorController@postMultiDeplacement');

Route::get('/locator/input/force/{input}', 'locatorController@forceInput');
Route::get('/locator/force/{arg}/{value}', 'locatorController@forceSearching');
Route::any('/locator/search', 'locatorController@search');

Route::get('/locator/catalogue', 'locatorController@getCatalogue');
Route::post('/locator/catalogue', 'locatorController@postCatalogue');

Route::get('/locator/{id}', 'locatorController@show');
Route::get('/locator/{id}/edit', 'locatorController@edit');

Route::post('/locator/out', 'locatorController@applyOutId');

Route::get('/locator/last/out', 'locatorController@lastOut');
Route::post('/locator/last/out', 'locatorController@lastOutFiltre');

Route::get('/locator/last/in', 'locatorController@getLastIn');
Route::post('/locator/last/in', 'locatorController@postLastIn');

Route::get('/locator/{id}/out', 'locatorController@outId');



//FORUM ---
Route::get('forum', 'ThreadController@index');
Route::post('/forum', 'ThreadController@store');

Route::get('/forum/create', 'ThreadController@create');

Route::get('forum/{channel}', 'ThreadController@index');
Route::post('/forum/{thread}', 'ThreadController@update');

Route::get('/forum/{channel}/{thread}', 'ThreadController@show');

Route::get('/forum/{channel}/{thread}/edit/', 'ThreadController@edit');
Route::get('/forum/{channel}/{thread}/disable', 'ThreadController@disableThread');
Route::post('/forum/{channel}/{thread}/replies', 'RepliesController@store');

Route::get('reply/disable/{reply}', 'RepliesController@disableReply');


Route::get('/channels/create', 'ChannelController@create');
Route::post('/channels', 'ChannelController@store');

Route::get('/thread/mode/reply', 'RepliesController@toggleWriteMode');

//DELAIS ------------------------------------------------------------------------------------------------------------------
Route::any('/delais', array('as' =>'delais' ,'uses'=>'DelaisController@index'));
Route::any('/PROTOdelais', array('as' =>'delais' ,'uses'=>'DelaisController@proto'));
Route::any('/PROTOachat', array('as' =>'delais' ,'uses'=>'DelaisController@achat'));
Route::get('/delais/create/{id}', array('as' =>'delais' ,'uses'=>'DelaisController@create'));
Route::any('/delais/filtre/{type}/{value}', array('as' =>'delaisFiltre' ,'uses'=>'DelaisController@filtre'));
//    Route::any('/delais/edit/{id}', array('as' =>'delaisEdit' ,'uses'=>'DelaisController@edit'));
//    Route::any('/delais/calendrier', array('as' =>'delaisCalender' ,'uses'=>'DelaisController@calender'));
Route::any('/delais/todo', array('as' =>'delaisTodo' ,'uses'=>'DelaisController@todo'));
//---------------------------------------------------------------------------------------------------------------------------------
});