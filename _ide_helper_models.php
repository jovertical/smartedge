<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\RevieweeProfile $reviewee_profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Airlock\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Model
 *
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Model withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Model withoutTrashed()
 */
	class Model extends \Eloquent {}
}

namespace App{
/**
 * App\RevieweeProfile
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $reviewee_number
 * @property string $enrolled_for
 * @property string|null $expired_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RevieweeProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RevieweeProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RevieweeProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RevieweeProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RevieweeProfile whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RevieweeProfile whereEnrolledFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RevieweeProfile whereExpiredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RevieweeProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RevieweeProfile whereRevieweeNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RevieweeProfile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RevieweeProfile whereUserId($value)
 */
	class RevieweeProfile extends \Eloquent {}
}

namespace App{
/**
 * App\Subject
 *
 * @property int $id
 * @property string $name
 * @property string $body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subject query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subject whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subject whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subject whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subject whereUpdatedAt($value)
 */
	class Subject extends \Eloquent {}
}

