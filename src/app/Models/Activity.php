<?php

namespace App\Models;

use App\Models\Relations\HasActivityRelations;
use App\Models\Scopes\HasActivityScopes;
use Database\Factories\ActivityFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait as HasNodes;

/**
 * @mixin IdeHelperActivity
 */
class Activity extends Model
{
    /** @use HasFactory<ActivityFactory> */
    use HasFactory,
        HasActivityRelations,
        HasActivityScopes,
        HasNodes;

    protected $fillable = [
        'name',
        'parent_id'
    ];
}
