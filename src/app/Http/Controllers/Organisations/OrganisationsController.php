<?php

namespace App\Http\Controllers\Organisations;

use App\Http\Controllers\Controller;
use App\Http\Resources\Organisation\OrganisationResource;
use App\Queries\OrganisationQuery;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use R3bzya\Helpers\Pages\Builder\PageFactory;

class OrganisationsController extends Controller
{
    public function search(OrganisationQuery $query, Request $request): AnonymousResourceCollection
    {
        return OrganisationResource::page(PageFactory::fromQuery($query, $request));
    }
}
