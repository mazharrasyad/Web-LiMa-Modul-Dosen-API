<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('user', 'UserController@index');
    $router->get('project', 'ProjectController@index');
    $router->get('sprint', 'SprintController@index');
    $router->get('team', 'TeamController@index');
    $router->get('member_team', 'MemberTeamController@index');
    $router->get('member_team_nilai', 'MemberTeamNilaiController@index');
    // $router->get('authors',  ['uses' => 'AuthorController@showAllAuthors']);
    // $router->get('authors/{id}', ['uses' => 'AuthorController@showOneAuthor']);
    // $router->post('authors', ['uses' => 'AuthorController@create']);
    // $router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);
    // $router->put('authors/{id}', ['uses' => 'AuthorController@update']);
});
