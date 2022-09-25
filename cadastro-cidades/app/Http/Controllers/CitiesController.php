<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cities;

class CitiesController extends Controller
{
  public function index(){

    $search = request('search');

    if($search) {
      $cities = Cities::where([
        ['cidade', 'like', '%'.$search.'%']
      ])->get();
    } else{
      $cities = Cities::all();
    }

    return view('welcome', ['cities' => $cities, 'search' => $search]);
  }
  

  public function create(){

    $cities = Cities::all();
    return view('events.create', ['cities' => $cities]);
  }

  public function store(Request $request){
    
    $city = new Cities;

    $city->cidade = $request->city;
    $city->estado = $request->state;
    $city->data_de_fundacao = $request->date;

    // Image Upload

    if($request->hasFile('image') && $request->file('image')->isValid()){
      $requestImage = $request->image;
      $extension = $requestImage->extension();
      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
      $requestImage->move(public_path('img/cities'), $imageName);
      $city->image = $imageName;
    }

    $user = auth()->user();
    $city->user_id = $user->id;

    $city->save();

    return redirect('/')->with('msg', 'Cidade cadastrada com sucesso!');
  }

  public function show($id){
    $cities = Cities::findOrFail($id);

    return view('events.show_cities', ['cities' => $cities]);
  }

  public function list(){


    $search = request('search');

    if($search) {
      $cities = Cities::where([
        ['cidade', 'like', '%'.$search.'%']
      ])->get();
    }else {
      $cities = Cities::all();
    }
    
    return view('events.list_cities', ['cities' => $cities]);
  }
}
