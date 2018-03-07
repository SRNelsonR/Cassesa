<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table ="images";
    protected $fillable = ['id','name'];
  
/*
  public function empleado(){

  	return $this->belongsTo(Empleado::class,'empleado_id');
  
  }

*/


   public function empleado(){
   	return $this->hasMany(Empleado::class);
   }


}
