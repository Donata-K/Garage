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
    $mechanic=new Mechanic;
    return view('mechanic.new', ['mechanic'=>$mechanic]);
}

public function save(MechanicRequest $request){
$mechanic=new Mechanic;
$mechanic->name=$request->input('mechanic_name');
$mechanic->surname=$request->input('mechanic_surname');
$mechanic->save();
// return redirect()->back()->withErrors(['Error!!!']);
return redirect()->route('mechanic.index')->with('success', ['Naujas mechanikas pridetas']);;
}


public function delete($id){

    $mechanic = Mechanic::where('id', $id)->first();
    if($mechanic->mechanicTrucks->count()>0){
        return redirect()->route('mechanic.index')->with('uzimtas', ['Mechanikas turi darbo su sunkvezimiu']);

    }
    // dd($mechanic->mechanicTrucks->count());

    $mechanic-> delete();
    return redirect()->route('mechanic.index')->with('success', ['Mechanikas Istrintas']);
}



public function __construct()
{
$this->middleware('auth');
}


}
