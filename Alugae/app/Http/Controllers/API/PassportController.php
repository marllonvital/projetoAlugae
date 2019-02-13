<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Validator;
use Auth;
use App\User;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;


class PassportController extends Controller
{
    public $successStatus = 200;

    public function login(){
      if (Auth::attempt(['email' => request('email'), 'senha' =>
      request('senha')])){
      $user = Auth::user();
      $success['token'] = $user -> createToken('MyApp') -> accessToken;
      return response() -> json(['success' => $success], $this ->successStatus);
      }
      else {
      return response() -> json (['error' => 'Unauthorised'], 401);
      }
    }

      public function register(Request $request) {
        $validator = Validator::make($request->all(), [
        'nome' => 'required',
        'email' => 'required|email',
        'senha' => 'required',
        'c_senha' => 'required|same:senha',
        ]);
        if ($validator -> fails()) {
        return response() -> json(['error' => $validator -> errors()], 401);
        }
        $newUser = new User;
        $newUser->nome = $request->nome;
        $newUser->email = $request->email;
        $newUser->senha = bcrypt($request->senha);
        $success['nome'] = $newUser->nome;
        $success['token'] = $newUser->createToken('MyApp')->accessToken;
        $newUser->save();
        return response() -> json(['success' => $success], $this ->successStatus);
        }

        public function getDetails() {
        $user = Auth::user();
        return response() -> json(['success' => $user], $this ->successStatus); //retorna as informações do usuário logado
      }
      public function logout(){
        $accessToken = Auth::user()->token();
        DB::table('oauth_refresh_tokens')->where('access_token_id',
        $accessToken->id)->update([
        'revoked' => true
        ]);
        $accessToken->revoke();
        return response()->json( null, 204);
      }
  }
