<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BattleUser extends Model
{
    public $timestamps = false;
    protected $table = 'battle_user';
    protected $fillable = ['user_id', 'battle_id'];
}