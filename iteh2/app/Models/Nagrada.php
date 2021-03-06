<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Recept;

class Nagrada extends Model
{
    use HasFactory;
    protected $table= 'nagradas';
    protected $fillable =['naziv','opis'];
    
   
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function recepts(){
        return $this->hasMany(Recept::class);
    }
}
