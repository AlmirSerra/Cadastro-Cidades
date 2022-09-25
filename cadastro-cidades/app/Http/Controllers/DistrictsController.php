<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cities;
use App\Models\Districts;

class DistrictsController extends Controller
{

    // public function index(){

    //     $district = Districts::all();
    //     return view('welcome', ['district' => $district]);
    //   }

    public function create(){

        $cities = Cities::all();
        return view('events.districts_create', ['cities' => $cities]);
      }
    
    public function store(Request $request){
    
        $district = new Districts;
  
        $district->bairro = $request->district;
        $district->cidade = $request->city;
  
        $district->save();
  
      return redirect('/')->with('msg', 'Bairro cadastrado com sucesso!');
    }

    public function show(){

        $district = Districts::all();

        return view('events.list_districts', ['district' => $district]);
    }
}
