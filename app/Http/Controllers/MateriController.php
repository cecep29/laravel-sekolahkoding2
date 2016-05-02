<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MateriController extends Controller
{
    //

    public function index()
    {
    	return view('materi/html');
    }

}
