<?php

namespace App\Models;

use App\Models\Relations\HasPhoneNumberRelations;
use Database\Factories\PhoneNumberFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperPhoneNumber
 */
class PhoneNumber extends Model
{
    /** @use HasFactory<PhoneNumberFactory> */
    use HasFactory,
        HasPhoneNumberRelations;

    protected $fillable = [
        'value',
        'organisation_id'
    ];
}
