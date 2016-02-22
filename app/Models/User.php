<?php namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Battle;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The battles that belong to the user.
     */
    public function battles()
    {
        return $this->belongsToMany('Battle');
    }
}
