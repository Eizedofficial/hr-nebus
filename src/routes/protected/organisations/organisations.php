<?php

use App\Http\Controllers\Organisation\OrganisationController;

Route::get('organisations:search', [OrganisationController::class, 'search']);
