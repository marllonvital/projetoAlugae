<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
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
      $novo_usuario= new User;
      $novo_usuario->insereUsuario($request);
      return response()->json(['Usuario Cadastrado!']);
    }

    public function show($id)
    {
      $novo_usuario = User::findOrFail($id);
      return response()->json([$novo_usuario]);
    }

    public function update(UserRequest $request, $id)
    {
      $novo_usuario= $novo_usuario::find( $request->$novo_usuario_id);
      $novo_usuario->atualizaUsuario($request);
    }

    public function destroy($id)
    {
      $novo_usuario=User::destroy($id);
      return response()->json(['Deletado!']);
    }
}