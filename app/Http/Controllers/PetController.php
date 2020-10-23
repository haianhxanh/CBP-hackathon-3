<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Client;

class PetController extends Controller
{
    public function index() 
    {
        $pets = Pet::orderBy('name', 'asc')->where('id', '<', 21)->get();
        return view('pets/index', compact('pets'));
    }

    public function show($id)
    {
        $pet = Pet::findOrFail($id);
        $clients = Client::all();

        $client = Client::find($pet->client_id);

        return view('pets/show', compact('pet','clients', 'client'));
    }

    public function destroy($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return redirect('/pets');
    }
    
        public function create()
    {
        
        return view('pets/create');
        
    }

    public function store(Request $request)
    {
        $pet = new Pet;

        $pet->name = $request->input('name');
        $pet->breed = $request->input('breed');
        $pet->age = $request->input('age');
        $pet->weight = $request->input('weight');
        $pet->client_id = $request->input('owner_id');
        $pet->photo = $request->input('photo');
        
        $pet->save();

        
        return redirect(action('PetController@index'));
    }
}
