<?php

Route::get('/', function()
{
    $users = User::all();

    return View::make('frontpage')->with('users', $users);
});