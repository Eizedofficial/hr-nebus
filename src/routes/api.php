<?php

use App\Http\Middleware\EnsureApiKeyIsValid;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => EnsureApiKeyIsValid::class], function () {
    require_once base_path('routes/protected/organisations/organisations.php');
});
