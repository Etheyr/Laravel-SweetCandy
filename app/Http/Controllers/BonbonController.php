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

	public function postAdd(Request $request){
		$bonbonStock = new Bonbon;
		$bonbonStock->name = $request->name;  
		$bonbonStock->stock = $request->stock;
		$bonbonStock->save();
		return back();
	}

	public function postMoins(){
		$bonbonStock = Bonbon::find($id);
		$bonbonStock->stock--;
		$bonbonStock->save();
	}

	public function postPlus(){
		$bonbonStock = Bonbon::find($id);
		$bonbonStock->stock++;
		$bonbonStock->save();
	}
}
