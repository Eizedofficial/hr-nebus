<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([], function () {
    require_once base_path('routes/protected/organisations/organisations.php');
});
