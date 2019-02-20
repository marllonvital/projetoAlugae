<?php
namespace App\Http\Controllers;

use App\Notifications\ConfirmationRegister;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use App\Notifications\ConfirmationRent;
use Carbon\Carbon;
use App\User;
use Auth;
class UserController extends Controller
{
    public function index()
    {
      return User::all();
    }

    public function store(UserRequest $request)
    {
      //
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
        $user->notify(new ConfirmationRent($user));

        return response()->json(['Reservado']);
    }

    public function removeProduct($id)
    {
        $user = Auth::user();

        $user->removeproduct($id);

        return response()->json(['Removido']);

    }

    public function getProduct()
    {
        $user = Auth::user();
        
        return response()->json([$user->product]);
    }
}
