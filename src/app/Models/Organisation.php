<?php

namespace App\Models;

use App\Models\Relations\HasOrganisationRelations;
use App\Models\Scopes\HasOrganisationScopes;
use Database\Factories\OrganisationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperOrganisation
 */
class Organisation extends Model
{
    /** @use HasFactory<OrganisationFactory> */
    use HasFactory,
        SoftDeletes,
        HasOrganisationRelations,
        HasOrganisationScopes;

    protected $fillable = [
        'name',
        'building_id'
    ];
}
