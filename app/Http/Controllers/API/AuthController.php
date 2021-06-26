<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class AuthController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8'
        ],[
            'email.unique'=>'email not valid '
        ]);
       if($validator->passes())
       {

        $user=new User();
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $tokenResult = $user->createToken('authToken')->plainTextToken;
        return response()->json([
        'user'=>$user,
        'status_code' => 200,
        'access_token' => $tokenResult,
        'token_type' => 'Bearer',
        ]);

      }else{
        $msg= $validator->messages()->first();
        return response(['status'=>204,'message'=>$msg]);

          }
    }
    public function login(Request $request)
    {
    try {
        $request->validate([
        'email' => 'required',
        'password' => 'required'
        ]);
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)) {
        return response()->json([
            'status_code' => 500,
            'message' => 'Unauthorized'
        ]);
        }
        $user = User::where('email', $request->email)->first();
        if ( ! Hash::check($request->password, $user->password, [])) {
        throw new \Exception('Error in Login');
        }
        $tokenResult = $user->createToken('authToken')->plainTextToken;
        return response()->json([
        'status_code' => 200,
        'access_token' => $tokenResult,
        'token_type' => 'Bearer',
        ]);
    } catch (\Exception $error) {
        return response()->json([
        'status_code' => 500,
        'message' => 'Error in Login',
        'error' => $error,
        ]);
    }
    }
    public function logout(Request $request)
    {

        $user = Auth::user();
        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();

        return response()->json([ 'data' => 'User logged out.' ], 200);
    }

}

