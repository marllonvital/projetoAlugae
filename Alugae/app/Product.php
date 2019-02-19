<?php

namespace App;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;


class Product extends Model
{
    public function users() {
      
      return $this->belongsToMany('App\User')->using('App\Rent');
    }

    public function owner(){
      return User::find($this->user_id);//$this->belongsTo('App\User');
    }

  public function newRent($user_id){
      $user = User::findOrFail($user_id);
      $this->users()->attach($user_id, ['date_initial' => Carbon::now(),'date_final' => Carbon::now(), 'quantity' => 2]);
      return true;   
    }

  public function insereProduto($request, $user){

    $this->user_id=$user->id;
    $this->description=$request->description;
    $this->price=$request->price;
    $this->name=$request->name;
    $this->brand=$request->brand;
    $this->type=$request->type;

    // if(!Storage::exists('localPhotos/')) //Criando uma pasta para armanezar as fotos!
    //         Storage::makeDirectory('localPhotos/',0775,true);

    // $validator = Validator::make($request->all(), [
    //   'photo' =>'required|file|image|mimes:jpg,jpeg,png,gif,webp|max:2048'
    // ]);

    // $file = $request->file('photo');
    // $path = $file->store('localPhotos');
    // $this->photo = $file;

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
