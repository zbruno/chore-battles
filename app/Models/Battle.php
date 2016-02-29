<?php namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Battle;

class Battle extends Authenticatable
{
    /*
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'battles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];

    /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */
    protected $visible = [
       'id',
       'title',
    ];

    /**
     * The users that belong to the battle.
     */
    public function users()
    {
        return $this->belongsToMany('User');
    }

}
