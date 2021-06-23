<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    function Login(){
        return view('Login.login');
       // return "from login contrller";
    }
    public function loginValidation(Request $request){
        $vatidateData = $request->validate([
            'email' => 'required|email',
            'pasword' => 'required|min:8|max:20'
        ]);

        return $request->input();

    }
}
