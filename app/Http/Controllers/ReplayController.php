<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Replay;

class ReplayController extends Controller
{
    public function replay(Request $request, $com_id){

        $replay = new Replay;
        $replay->name = $request->name;
        $replay->replay = $request->replay_comment;
        $replay->comment_id = $request->com_id;

        $replay->save();

        return redirect()->back();
    }
}
