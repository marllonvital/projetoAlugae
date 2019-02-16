<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function insereProduto($request){

    $this->availability=$request->availability;
    $this->description=$request->description;
    $this->price=$request->price;
    $this->name=$request->name;
    $this->firm=$request->firm;
    $this->type=$request->type;

    $this->save();
  }
  public function atualizaProduto($request){
    
    $this->availability=$request->availability;
    $this->description=$request->description;
    $this->price=$request->price;
    $this->name=$request->name;
    $this->firm=$request->firm;
    $this->type=$request->type;
    
    $this->save();


  }

}
