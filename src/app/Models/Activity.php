<?php

namespace App\Models;

use App\Models\Relations\HasActivityRelations;
use Database\Factories\ActivityFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperActivity
 */
class Activity extends Model
{
    /** @use HasFactory<ActivityFactory> */
    use HasFactory,
        HasActivityRelations;

    protected $fillable = [
        'name',
        'parent_id'
    ];
}
