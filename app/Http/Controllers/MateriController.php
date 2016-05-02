<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Materi;

class MateriController extends Controller
{
    public function show()
    {
    	$materis = Materi::all();

    	return view('materi')->with('materis', $materis);
    }

    public function single($id)
    {
    	$materi = Materi::find($id);

    	return view('materi-single')->with('materi', $materi);
    }
}
