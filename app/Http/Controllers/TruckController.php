<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Truck;
use App\Http\Requests\TruckRequest;


class TruckController extends Controller
{
    public function index(){
        $trucks = Truck::all();
        return view('truck.index', ['truck_list' => $trucks]);
    }
    
    
    public function new(){
        return view('truck.new');
    }
    
    public function save(TruckRequest $request){
    $truck=new Truck;
    $truck->maker=$request->input('maker');
    $truck->plate=$request->input('plate');
    $truck->make_year=$request->input('make_year');
    $truck->mechanic_notices=$request->input('mechanic_notices');
    $truck->mechanic_id=$request->input('mechanic_id');
    $truck->save();
    return redirect()->route('truck.index');
    }
    
    public function delete($id){
        $truck = Truck::where('id', $id)->first();
        $truck-> delete();
        return redirect()->route('truck.index')->with('success', ['Sunkvezimis istrintas']);
    }
    
}
