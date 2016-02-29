<?php namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Battle;

use App\Helpers\BattleHelper;

class BattleController extends Controller
{
    /**
     * Show listing of battles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $battles = DB::table('battles')
                        ->join('battle_user', 'battles.id', '=', 'battle_user.battle_id')
                        ->where('battle_user.user_id', Auth::user()->id)
                        ->get();

        return view('dashboard.battles.battles')
            ->with('battles', $battles);
    }

    /**
         * Store a newly created battle in storage.
         *
         * @param  Request  $request
         * @return Response
         */
        public function create(Request $request)
        {
            // Execute
            $success_story = BattleHelper::createBattle($request);

            $battles = DB::table('battles')
                            ->join('battle_user', 'battles.id', '=', 'battle_user.battle_id')
                            ->where('battle_user.user_id', Auth::user()->id)
                            ->get();

            return view('dashboard.battles.battles')
                ->with('battles', $battles);
        }
}
