<?php

namespace App\Models\Relations;

use App\Models\Organisation;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasActivityRelations
{
    public function organisations(): BelongsToMany
    {
        return $this->belongsToMany(Organisation::class);
    }
}
