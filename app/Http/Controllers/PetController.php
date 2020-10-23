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

    }
}