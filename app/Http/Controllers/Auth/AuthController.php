<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use ResponseTrait;
    //
    public function login(Request $request){

        $user = User::where('email', $request->email)->first();
        if(!$user){
           return $this->responseError('invalid user');
        }
        //check password
        if(Hash::check($request->password, $user->password)){
            $createToken = $user->createToken('authToken')->plainTextToken;
            $data = [
                'user' => $user,
                'token' => $createToken,
                'token_type' => "Bearer",
                
            ];
           return $this->responseSuccess($data, 'login success');
        }
    }
}
