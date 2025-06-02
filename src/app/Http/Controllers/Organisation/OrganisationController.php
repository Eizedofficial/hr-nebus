<?php

namespace App\Http\Controllers\Organisation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Organisation\SearchOrganisationsRequest;
use App\Http\Resources\Organisation\OrganisationResource;
use App\Models\Organisation;
use App\Queries\OrganisationQuery;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use R3bzya\Helpers\Pages\Builder\PageFactory;

/** @group Организации */
class OrganisationController extends Controller
{
    /** Выборка организаций по фильтру */
    public function search(OrganisationQuery $query, SearchOrganisationsRequest $request): AnonymousResourceCollection
    {
        return OrganisationResource::page(PageFactory::fromQuery($query, $request));
    }

    /** Информация об организации по ID */
    public function show(Organisation $organisation): OrganisationResource
    {
        return new OrganisationResource($organisation);
    }
}
