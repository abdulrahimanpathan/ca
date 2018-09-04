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
    return view('welcome');
});
Route::get('teams', [
        "as"   => "team.index",
        "uses" => "TeamController@index",
]);
Route::get('teams/create', [
        "as"   => "team.create",
        "uses" => "TeamController@create",
]);
Route::post('teams/store', [
        "as"   => "team.store",
        "uses" => "TeamController@store",
]);
Route::get('teams/{id}/show', [
        "as"   => "team.show",
        "uses" => "TeamController@show",
]);
Route::get('players/create', [
        "as"   => "player.create",
        "uses" => "PlayerController@create",
]);
Route::post('players/store', [
        "as"   => "player.store",
        "uses" => "PlayerController@store",
]);
Route::get('fixtures', [
        "as"   => "fixture.index",
        "uses" => "FixtureController@index",
]);
Route::get('points-table', [
        "as"   => "points.index",
        "uses" => "PointsController@index",
]);