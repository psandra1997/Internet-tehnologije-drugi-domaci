<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recept;
use App\Models\Nagrada;
use App\Models\User;

class ReceptController extends Controller
{
 public  function index(){

    $recepts = auth()->user()->recepts();
    return view('dashboard',compact('recepts'));
   }

  public function add(){
    return view('add');
}

public function create(Request $request){

    $this->validate($request,['opisRecepta'=>'required']);
    $recept=new Recept();
    $recept->opisRecepta=$request->opisRecepta;
    $recept->user_id = auth()->user()->id;
    $recept->save();
    return redirect('/dashboard');
}

public function edit(Recept $recept){

    if(auth()->user()->id == $recept->user_id){
    return view('edit',compact('recept'));
    }else{
        return redirect('dashboard');
    }
}
public function update(Request $request, Recept $recept){

    if(isset($_POST['delete'])){
        $recept->delete();
        return redirect('dashboard');
    }
    else{
        $this->validate($request,['opisRecepta'=>'required']);
        $recept->opisRecepta = $request->opisRecepta;
        $recept->save();
        return redirect('dashboard');
    }
}


}