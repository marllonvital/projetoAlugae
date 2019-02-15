<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

  public function insereCategoria($request){
  	
    $this->name=$request->name;


    $this->save();
  }
    public function atualizaCategoria($request){

      $this->name=$request->name;

      $this->save();
	}

  }
