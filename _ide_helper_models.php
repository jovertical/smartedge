<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace Rentalong\Models{
/**
 * Rentalong\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Rentalong\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Rentalong\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Rentalong\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Rentalong\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Rentalong\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Rentalong\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Rentalong\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Rentalong\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Rentalong\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Rentalong\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Rentalong\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

