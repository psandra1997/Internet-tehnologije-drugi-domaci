<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recept;
use App\Models\User;
use App\Models\Nagrada;
use Validator;
use App\Http\Controllers\BazniController;
//use App\Http\Resources\Nagrada;

class NagradaController
{
    
function dodajNagradu(Request $req){

    $nagrada=new Nagrada;
    $nagrada->naziv=$req->input('naziv');
    $nagrada->opis=$req->input('opis');
    $nagrada->save();
    return response()->json($nagrada);
}
function listaNagrada(){

    return Nagrada::all();
}
function obrisiNagradu($id){
    $result=Nagrada::where('id',$id)->delete();
    if($result){
        return ["Uspesno obrisana nagrada."];
    }else{
        return ["Greska prilikom brisanja."];
    }
}
function vidiNagradu($naziv){
    return Nagrada::find($naziv);
}

function pretraga($naziv){
    return Nagrada::where('naziv','Like',"%$naziv%")->get();
}

    
 public function izmena(Request $request, Nagrada $nagrada)
 {
    $input=$request->all();
        $validator=Validator::make($input,['naziv','opis',]);

    if($validator->fails()){
        return 'Greska.';
    }else{
            $nagrada->naziv=$input['naziv'];
            $nagrada->opis=$input['opis'];
            $nagrada->save();
        }
    return $this->sendResponse(new Nagrada($nagrada,'Izmena nagrade uspesna.'));
 }
 
}

