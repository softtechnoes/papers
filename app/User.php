<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Uuids as Uuids;

class User extends Authenticatable
{
    use Notifiable;
    use Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //Table name
    protected $table = 'users';
    // Primary key
    public $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['name', 'email', 'password','token', 'two_factor_secret', 'two_factor_recovery_codes', 'two_factor_secret', 'two_factor_secret', 'two_factor_secret', 'two_factor_secret', 'two_factor_secret'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the roles of the user
     *
     * @return \App\Models\Users\Role
     */
    public function role()
    {
        return $this->belongsToMany('App\Models\Users\Role', 'role_user', 'user_id', 'role_id');
        // return $this->hasOne('App\Models\Users\Role', 'App\Models\Users\RoleUser', 'user_id', 'role_id');
    }
}
