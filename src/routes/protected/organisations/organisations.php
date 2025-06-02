<?php

use App\Http\Controllers\Organisations\OrganisationsController;

Route::get('organisations:search', [OrganisationsController::class, 'search']);
