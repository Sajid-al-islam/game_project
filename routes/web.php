<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
 Route::get('/route-cache', function() {
     \Artisan::call('route:cache');
      \Artisan::call('config:cache');
      \Artisan::call('cache:clear');
      \Artisan::call('view:clear');
      \Artisan::call('optimize:clear');
     return 'Routes cache cleared';
 });
Route::get('/','UserController@Index');



Route::get('fruits','NewGameController@Index');
Route::get('fruits/tray_id','NewGameController@TimeCall')->middleware('throttle:game_hit');;
Route::get('fruits/fortune_insert','NewGameController@FortuneInsert')->middleware('throttle:game_hit');;
Route::get('fruits/fortune_saven_insert','NewGameController@FortuneSevenInsert')->middleware('throttle:game_hit');;
Route::get('fruits/fortune_watermelon_insert','NewGameController@FortunewatermelonInsert');
Route::get('fruits/winner_saven_win','NewGameController@GameWinner');
Route::get('fruits/win_pred','NewGameController@WinManpu')->middleware('throttle:game_hit');;
Route::get('fruits/wining_fruits','NewGameController@LastGameWinner')->middleware('throttle:game_hit');;
Route::get('fruits/get_winner_info','NewGameController@GameWinnerInfo');
Route::get('fruits/user','NewGameController@UserData')->middleware('throttle:game_hit');;
Route::get('fruits/result_final','NewGameController@Result_lock')->middleware('throttle:game_hit');;
Route::get('fruits/push_user_data','NewGameController@PushUserData');
Route::get('fruits/win_or_loss_calculation/','NewGameController@WinOrLoss')->middleware('throttle:game_hit');;
Route::get('fruits/last_user_result','NewGameController@UserResult');
Route::get('fruits/pusher_cron_job','Game\FruitsGameController@pushercronjob');
Route::get('fruits/user_data','Game\FruitsGameController@userdata');
Route::get('fruits/hit_pot','Game\FruitsGameController@HitPots');
Route::get('fruits/all_active_user','Game\FruitsGameController@ActiveUser');
Route::get('fruits/all_last_rank','Game\FruitsGameController@LastRank');
Route::get('fruits/fortune_user_activity/','NewGameController@UserAvtivity');
Route::get('fruits/fortune_all_active_users/','NewGameController@AllActiveUser');


Route::group(['middleware' => ['auth','admin'],'namespace' => 'Admin'], function () {



});







