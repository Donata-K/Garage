<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mechanic;
use App\Http\Requests\MechanicRequest;

class MechanicController extends Controller
{
public function index(){
    // return view('mechanic.index');
    $mechanics = Mechanic::all();
    return view('mechanic.index', ['mechanics_list' => $mechanics]);
}


public function new(){
    return view('mechanic.new');
}

public function save(MechanicRequest $request){
$mechanic=new Mechanic;
$mechanic->name=$request->input('mechanic_name');
$mechanic->surname=$request->input('mechanic_surname');
$mechanic->save();
return redirect()->route('mechanic.index');
}

public function delete($id){
    $mechanic = Mechanic::where('id', $id)->first();
    $mechanic-> delete();
    return redirect()->route('mechanic.index')->with('success', ['Mechanikas Istrintas']);
}



}
