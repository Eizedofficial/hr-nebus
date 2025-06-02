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
 * @property int $_lft
 * @property int $_rgt
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Kalnoy\Nestedset\Collection<int, Activity> $children
 * @property-read int|null $children_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Organisation> $organisations
 * @property-read int|null $organisations_count
 * @property-read Activity|null $parent
 * @method static \Kalnoy\Nestedset\Collection<int, static> all($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity ancestorsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity ancestorsOf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity applyNestedSetScope(?string $table = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity countErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity d()
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity defaultOrder(string $dir = 'asc')
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity descendantsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity descendantsOf($id, array $columns = [], $andSelf = false)
 * @method static \Database\Factories\ActivityFactory factory($count = null, $state = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity fixSubtree($root)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity fixTree($root = null)
 * @method static \Kalnoy\Nestedset\Collection<int, static> get($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity getNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity getPlainNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity getTotalErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity hasChildren()
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity hasParent()
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity isBroken()
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity leaves(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity makeGap(int $cut, int $height)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity moveNode($key, $position)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity ofParent(int $parentId, int $depth = 3)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity orWhereAncestorOf(bool $id, bool $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity orWhereDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity orWhereNodeBetween($values)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity orWhereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity query()
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity rebuildSubtree($root, array $data, $delete = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity rebuildTree(array $data, $delete = false, $root = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity reversed()
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity root(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereAncestorOf($id, $andSelf = false, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereAncestorOrSelf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereCreatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereDescendantOf($id, $boolean = 'and', $not = false, $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereDescendantOrSelf(string $id, string $boolean = 'and', string $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereIsAfter($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereIsBefore($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereIsLeaf()
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereIsRoot()
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereLft($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereName($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereNodeBetween($values, $boolean = 'and', $not = false, $query = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereParentId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereRgt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity whereUpdatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity withDepth(string $as = 'depth')
 * @method static \Kalnoy\Nestedset\QueryBuilder<static>|Activity withoutRoot()
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
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Building radius($latitude, $longitude, $radius)
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
 * @property-read \Kalnoy\Nestedset\Collection<int, \App\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Building $building
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PhoneNumber> $phoneNumbers
 * @property-read int|null $phone_numbers_count
 * @method static \Database\Factories\OrganisationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation ofActivity(int $activityId)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Organisation ofNestedActivity(int $parentActivityId)
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

