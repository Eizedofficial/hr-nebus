<?php

namespace App\Models\Relations;

use App\Models\Organisation;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasBuildingRelations
{
    public function organisations(): HasMany
    {
        return $this->hasMany(Organisation::class);
    }
}
