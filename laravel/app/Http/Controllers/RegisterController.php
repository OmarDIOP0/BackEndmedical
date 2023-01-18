<?php

namespace App\Http\Controllers;

use Exception;
use Throwable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(Request $request)
    {
        try{
            $validation=$request->validate([
                'name'=>'required|min:4|string',
                'email'=>'required|unique:users|email',
                'password'=>'required|min:8|string'
            ]);
        if($validation){
            $user=User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password)
                //'password'=>$request->password
              ]);

             return response()->json([
                'user'=>$user
             ]);
        }
        }
        catch(\Exception $e){
            return response()->json([
                'message'=>'Something goes wrong while creating a user!!'
            ],500);
        }
}
}
