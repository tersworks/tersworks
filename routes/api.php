<?php

use Tersworks\Facades\Route;
use App\Controllers\Controller;

 Route::get('/y', function () {
 	echo 'Ok';
 });

 Route::get('/n', function () {
 	echo 'Ne';
 });

 Route::get('/maybe', function () {
 	echo 'maybe';
 });

 Route::get('/class', [Controller::class, 'class']);