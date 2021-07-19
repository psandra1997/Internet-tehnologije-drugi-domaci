<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recept;
use App\Models\Nagrada;
use App\Models\User;

class NagradaController extends Controller
{
    public  function index(){

        $recepts = auth()->user()->nagradas();
        return view('dashboard',compact('nagradas'));
       }
    
}
