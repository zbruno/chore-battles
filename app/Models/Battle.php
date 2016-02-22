<?php namespace App\Models;

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
     * The users that belong to the battle.
     */
    public function users()
    {
        return $this->belongsToMany('User');
    }

}
