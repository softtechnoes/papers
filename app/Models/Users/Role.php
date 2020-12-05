<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $connection = 'mysql';
    //Table name
    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['level', 'name', 'description'];

    // Local scopes & properties

    public function scopeVisible($query) {
        return $query->where('visible', '=', '1');
    }

    /**
     * Get the users for the role
     *
     * @return void
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
