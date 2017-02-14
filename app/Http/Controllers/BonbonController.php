<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bonbon;

class BonbonController extends Controller
{
     public function getIndex(){
    	$bonbonStock = Bonbon::all();
    	return view('bonbons.index', ['bonbon'=>$bonbonStock]);
    }
}
