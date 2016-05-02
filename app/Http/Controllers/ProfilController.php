<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProfilController extends Controller
{
    public function index()
    {
    	$data['nama'] = "Cecep";
    	$data['umur'] = 31;
    	return view('profil')->with('data', $data);
    }
}
