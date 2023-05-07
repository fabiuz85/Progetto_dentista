<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollaboratorController extends Controller
{
    public function index(Request $request)
   {
       $collaborators = DB::table('collaborator')->get();

       return view('/chi-siamo', compact('collaborators'));
   }


   public function details(Request $request, $id)
   {
       $collaborator = DB::table('collaborators')->where('id', $id)->first();
       return view('chi-siamo.details', compact('collaborator'));
   }
   public function show()
   {
       $collaborators = Collaborator::all();
       return view('chi-siamo.show', ['collaborators' => $collaborators]);
   }

}
