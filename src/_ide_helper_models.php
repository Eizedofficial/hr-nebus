<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Activity> $children
 * @property-read int|null $children_count
 * @property-read Activity|null $parent
 * @method static \Database\Factories\ActivityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperActivity {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $address
 * @property float $longitude
 * @property float $latitude
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Organisation> $organisations
 * @property-read int|null $organisations_count
 * @method static \Database\Factories\BuildingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperBuilding {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int $building_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Building $building
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PhoneNumber> $phoneNumbers
 * @property-read int|null $phone_numbers_count
 * @method static \Database\Factories\OrganisationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation whereBuildingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperOrganisation {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $value
 * @property int $organisation_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Organisation $organisation
 * @method static \Database\Factories\PhoneNumberFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PhoneNumber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PhoneNumber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PhoneNumber query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PhoneNumber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PhoneNumber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PhoneNumber whereOrganisationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PhoneNumber whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PhoneNumber whereValue($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperPhoneNumber {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

