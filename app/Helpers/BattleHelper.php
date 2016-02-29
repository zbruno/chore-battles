<?php namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

use App\Models\Battle;
use App\Models\BattleUser;

class BattleHelper {

    /**
     * Create the new battle.
     *
     * @param $input
     * @return Success Story
     */
    public static function createBattle($input)
    {
        $battle = new Battle;
        $battle->title = $input['title'];
        $battle->save();

        $battle_user = new BattleUser;
        $battle_user->user_id = Auth::user()->id;
        $battle_user->battle_id = $battle->id;
        $battle_user->save();

        return $battle;
    }

}