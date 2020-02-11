<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\User
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Airlock\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $type
 * @property-read \App\Models\RevieweeProfile $reviewee_profile
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereType($value)
 */
    class User extends \Eloquent
    {
    }
}

namespace App\Models{
/**
 * App\Models\Model
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model query()
 * @mixin \Eloquent
 */
    class Model extends \Eloquent
    {
    }
}

namespace App\Models{
/**
 * App\Models\RevieweeProfile
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $reviewee_number
 * @property string $enrolled_for
 * @property string|null $expired_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevieweeProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevieweeProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevieweeProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevieweeProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevieweeProfile whereEnrolledFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevieweeProfile whereExpiredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevieweeProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevieweeProfile whereRevieweeNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevieweeProfile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevieweeProfile whereUserId($value)
 * @mixin \Eloquent
 */
    class RevieweeProfile extends \Eloquent
    {
    }
}
