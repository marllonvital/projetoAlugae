<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use App\Notifications\ConfirmationRegister;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
      return User::all();
    }

    public function store(UserRequest $request)
    {
      $newUser = new User;

      $newUser->insereUsuario($request);
      $newUser->notify(new ConfirmationRegister($newUser));
      return response()->json(['Usuario Cadastrado!']);
    }

    public function show($id)
    {
      $newUser = User::findOrFail($id);
      return response()->json([$newUser]);
    }

    public function update(UserRequest $request, $id)
    {
      $newUser= User::findOrFail($id);
      
      $newUser->atualizaUsuario($request);
      return response()->json([$newUser]);
    }

    public function destroy($id)
    {
      $newUser=User::destroy($id);
      return response()->json(['Deletado!']);
    }


    //Funções de usuário autenticado

    public function reserveProduct($product_id)
    {
        $user = Auth::user();

        $user->reserveProduct($product_id);

        return response()->json(['Reservado']);

    }

    public function removeProduct()
    {
        $user = Auth::user();

        $user->removeproduct();

        return response()->json(['Removido']);

    }

    public function getProduct()
    {
        $user = Auth::user();
        
        return response()->json([$user->product]);

    }

    public function getInfo()
    {
        $user = Auth::user();

        return response()->json(['success' => $user], 200); //retorna as informações do usuário logado

    }
}
