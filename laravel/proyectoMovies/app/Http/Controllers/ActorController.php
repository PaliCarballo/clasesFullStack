<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index(){
        $actors = \App\Actor::all();
        //dd($actors);

        return view('actors.index')->with(['actors' => $actors]);
    }
}
