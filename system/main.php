<?php
use Inphinit\Routing\Route;

Route::set('GET', '/', 'Home:automaticGetLanguage');
Route::set('GET', '/{:[a-zA-Z0-9\-]+:}{:/?:}', 'Home:index');