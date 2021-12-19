<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Systemuser;
use App\Models\Token;
use DateTime;

class LoginAPIController extends Controller
{
    //
    public function  login(Request $req){
        $systemuser = Systemuser::where('U_username',$req->username)->where('U_password',$req->password)->first();
        if($systemuser){
            $api_token = Str::random(64);
            $token = new Token();
            $token->userid = $systemuser->id;
            $token->token = $api_token;
            $token->created_at = new DateTime();
            $token->save();
            return $token;
        }
        return "No user found";

    }
    public function logout(Request $request){

        $Token=Token::where('id',$request->id)->first();
        if($Token)
        {
            $Token->expired_at=new DateTime();
            $Token->save();
            return $Token;
        }


    }
    function Profile(Request $request)
    {
        $Systemuser=Systemuser::where('id',$request->id)->first();
        return $Systemuser;
    }

   
}
