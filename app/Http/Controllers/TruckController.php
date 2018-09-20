<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Truck;
use App\Mechanic;
use App\Http\Requests\TruckRequest;


class TruckController extends Controller
{
    public function index(){
        // $truck=Truck::where('id',1)->first();
        $trucks = Truck::all();
        //prieina prie objekto namo.
        // dd($truck->truckMechanic->name);
        return view('truck.index', ['truck_list' => $trucks]);
    }
    
    
    public function new(){
  
        $truck=new Truck;
        $mechanics = Mechanic::getSelectbox();
        // return view('truck.new', ['mechanics'=> $mechanics, 'truck' =>$truck]);
        return view('truck.new', ['mechanics'=> $mechanics]);
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


//     public function saveUpdate(MechanicRequest $request){
// ///route post
// //issaugom lentele
//         $truck = Truck::where('id',$request->input('id'))->first();
    

//         $mechanic->name=$request->input('mechanic_name');
//         $mechanic->surname=$request->input('mechanic_surname');
//         $mechanic->save();
//         return redirect()->route('mechanic.index');
//         }
public function filter() {
    return view('truck.index', ['trucks' => Truck::orderBy('maker', 'asc')->get()]);
  }


  
// public function saveUpdate(TruckRequest $request){
//     $truck = Truck::where('id',$request->input('id'))->first();
//     $truck->maker=$request->input('maker');
//     $truck->plate=$request->input('plate');
//     $truck->make_year=$request->input('make_year');
//     $truck->mechanic_notices=$request->input('mechanic_notices');
//     $truck->save();
//     return redirect()->route('truck.index');
//     }
        
//         public function update($id){
//             $truck = Truck::where('id', $id)->first();
//           //  retur forma uzpildyta
//           //atvaizduoja update
//           //papidlomas hidden su id 
//           //route kaip get
//           //sukuriam lentele

//             return redirect()->route('mechanic.index')->with('success', ['Mechanikas Istrintas']);
//         }
        








    public function __construct()
{
$this->middleware('auth');
}
    
}
