<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function index(Request $request)
    {
        $count = DB::table('services')->count();
        $half = ceil($count / 2);
        $leftServices = DB::table('services')->take($half)->get();
        $rightServices = DB::table('services')->skip($half)->take($count - $half)->get();

        $collaborators = DB::table('collaborators')->get();


        return view('/welcome', compact('collaborators', 'leftServices', 'rightServices') );
    }
}
