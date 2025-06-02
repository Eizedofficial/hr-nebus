<?php

namespace App\Models;

use Akuechler\Geoly;
use App\Models\Relations\HasBuildingRelations;
use Database\Factories\BuildingFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperBuilding
 */
class Building extends Model
{
    /** @use HasFactory<BuildingFactory> */
    use HasFactory,
        SoftDeletes,
        HasBuildingRelations,
        Geoly;

    protected $fillable = [
        'address',
        'longitude',
        'latitude',
    ];
}
