<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function register_user(Request $req){
        $username = $req -> name;
        $email = $req -> email;
        $password = $req -> password;
        $new_data = new User([
            'name' => $username,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        $new_data -> save();
        return response() -> json(['new_user' => $new_data],200);
    }
    public function get_users(Request $req){
        $users = User::all();
        return response() ->json(['new_user' => $users],200);
        //dd($users);
    }
    public function update_user(Request $req){
       // dd('hi');

       $client_id = $req -> user_id;
       $new_password = $req -> new_password;
       $user_name = $req -> username;
       
       $update_query = User::where('id', $client_id)
       ->update([
        'password' => $new_password,
        'name' => $user_name
        ]);

        if ($update_query == 0){
            return response() ->json(['message' => 'user not found'],200);
        }

        return response() ->json(['message' => 'update succesfull'],200);
    }
    public function delete_user(Request $req){
        $client_id = $req -> user_id;

        $delete_query = User::where('id', $client_id)
        ->delete();
    dd($client_id);
    }
    public function login_user(Request $req){
        $email = $req -> email;
        $password = $req -> password;
        $user = User::where('email', $email)-> first();

        if ($user == null){
            return response() ->json(['message' => 'user does not exist'],200);
        }
        if(Hash::check($password,$user -> password)== false){
            return response() -> json(['message' => 'password incorrect'],203);
        }
        $token = $user -> createToken('personal Access Token') -> plainTextToken;

       
        return response() -> json(['accessToken' => $token],201);
    }
    public function get_me(Request $req){
        $user = auth('sanctum') -> user();

        if ($user == null){
            return response() -> json (['user_status' => "user not found"],203);

        } 
        return response() -> json(['user_status' => $user],200);
        //dd($user);
    }
    }
