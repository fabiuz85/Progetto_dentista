<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollaboratorController extends Controller
{
    public function index(Request $request)
   {
       $collaborators = DB::table('collaborators')->get();

       return view('/staff', compact('collaborators'));
   }


   public function details($name, $surname, $id)
   {
       $collaborator = DB::table('collaborators')->where('id', $id)->first();
       $lines=explode(PHP_EOL, $collaborator->description);
       return view('profile', compact('collaborator'),['lines'=>$lines, 'name'=>$collaborator->name],);
   }
   public function show()
   {
       $collaborators = Collaborator::all();
       return view('staff.show', ['collaborators' => $collaborators]);
   }

}
