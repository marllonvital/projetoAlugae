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
    $this->brand=$request->brand;
    $this->type=$request->type;

    $this->save();
  }
  public function atualizaProduto($request){

    $this->availability=$request->availability;
    $this->description=$request->description;
    $this->price=$request->price;
    $this->name=$request->name;
    $this->brand=$request->brand;
    $this->type=$request->type;

    $this->save();
  }

  public function  users(){
      return $this->belongsTo('App\User');
  }

  public function  users(){
      return $this->hasMany('App\User');
  }

  public function newUsers($user_ids){
      if($this->products_remaining <= sizeof($user_ids)){
          return 'Produto indisponivel';
      } else {

          foreach ($user_ids as $user_id) {
              $user = User::findOrFail($user_id);
              $user->product_id = $this->id;
              $user->save();

              $this->products_remaining -= 1;
              $this->save();
          }

          return true;
      }

  }

  public function removeUsers($user_ids){

      foreach ($user_ids as $user_id) {
          $user = User::findOrFail($user_id);
          $user->product_id = null;
          $user->save();

          $this->products_remaining += 1;
          $this->save();
      }

      return true;

  }

}
