<?php

use App\Http\Controllers\Organisation\OrganisationController;

Route::get('organisations:search', [OrganisationController::class, 'search']);
Route::get('organisations/{organisation}', [OrganisationController::class, 'show']);
