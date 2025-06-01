<?php

namespace App\Models\Relations;

use App\Models\Activity;
use App\Models\Building;
use App\Models\PhoneNumber;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasOrganisationRelations
{
    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class);
    }

    public function activities(): BelongsToMany
    {
        return $this->belongsToMany(Activity::class);
    }

    public function phoneNumbers(): HasMany
    {
        return $this->hasMany(PhoneNumber::class);
    }
}
