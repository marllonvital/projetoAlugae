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
}
