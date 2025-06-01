<?php

namespace App\Models\Relations;

use App\Models\Organisation;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasPhoneNumberRelations
{
    public function organisation(): BelongsTo
    {
        return $this->belongsTo(Organisation::class);
    }
}
