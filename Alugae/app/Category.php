<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

  public function insereCategoria($request){
  	
    $this->nome=$request->nome;


    $this->save();
  }
    public function atualizaCategoria($request){

      $this->nome=$request->nome;

      $this->save();
	}

  }
