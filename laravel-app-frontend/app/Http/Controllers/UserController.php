<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class UserController extends Controller
{
    
    public function homepage(){
        //$http = new \GuzzleHttp\Client();
        //$response = $http -> get('http://127.0.0.1:8000/api/user_route/me',[
        //'headers'=>[
        //    'Authorization' => 'Bearer '.$req -> cookie('personalToken')
       // ]

       // ]);
       // if($response -> getStatusCode() ==203)
       // return redirect('/login');
        return view('homepage');
    }
    public function aboutpage(){
        return view('aboutpage');
    }
    public function sproductpage(){
        return view('sproductpage');
    }
    public function shoppage(){
        return view('shoppage');
    }
    public function cartpage(){
        return view('cartpage');
    }
    public function contactpage(){
        return view('contactpage');
    }
    public function loginpage(Request $req){
       // return view('loginpage');
        $http = new \GuzzleHttp\Client();
        $response = $http -> get('http://127.0.0.1:8000/api/user_route/me',[
        'headers'=>[
            'Authorization' => 'Bearer '.$req -> cookie('personalToken')
        ]
       
        ]);
        if ($response -> getStatusCode() == 200)
        return  redirect('/login');

        return view('loginpage');
    }
    public function login_handle(Request $req){
       
       $email = $req -> email;
       $password = $req -> password;

       $http = new \GuzzleHttp\Client();
       $body =[
        'email'  => $email,
        'password' => $password,
       ];

       $response = $http -> post('http://127.0.0.1:8000/api/user_route/login_user_by_id',['form_params' => $body]);
       $result = json_decode((string)$response -> getBody(), true);
       if($response -> getStatusCode() == 200){
        return back() -> with('message', 'username or password incorrect');
    }

       $accessToken = $result ['accessToken'];
       return redirect('/login') -> cookie ('personalToken',$accessToken);
       dd($accessToken);
       
    }
}
