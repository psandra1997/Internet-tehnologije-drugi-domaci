<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recept;
use App\Models\User;
use Validator;
use App\Http\Resources\Nagrada;

class NagradaController extends BazniController
{
    public  function index(){

        $nagradas=Nagrada::all();
        return $this->sendResponse(Nagrada::cllection($nagradas), 'Nagrada uspesno.');
       }
    public function store(Request $request)
    {
        $input=$request->all();
        $validator=Validator::make($input,[
            'naziv','opis',
        ]);
        if($validator->fails()){
            return 'Greska.';
        }$nagrada=Nagrada::create($input);
        return $this->sendResponse(new Nagrada($nagrada), 'Nagrada dodata.');
    }
    public function show($id)
    {
        $nagrada=Nagrada::find($id);
        if(is_null($nagrada)){
            return 'Greska.';
        }
        return new Nagrada($nagrada);
    }
 public function update(Request $request, Nagrada $nagrada)
 {
    $input=$request->all();
        $validator=Validator::make($input,[
            'naziv','opis',
        ]);
        if($validator->fails()){
            return 'Greska.';
        }$nagrada->name=$input['naziv'];
        $nagrada->opis=$input['opis'];
        $nagrada->save();
        return $this->sendResponse(new Nagrada($nagrada,'Izmena nagrade uspesna.'));
 }
 public function delete(Nagrada $nagrada)
 {
     $nagrada->delete();
     return $this->sendResponse([],'Obrisana nagrada');
 }

}
