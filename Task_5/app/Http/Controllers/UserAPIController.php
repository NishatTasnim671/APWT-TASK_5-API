<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Systemuser;

class UserAPIController extends Controller
{
    // 
    function register(Request $request)
    {
        
          
            $var = new Systemuser();
        $var->U_Name= $request->Name;
        $var->U_phone= $request->Phone;
        $var->U_address= $request->Address;
        $var->U_username= $request->Username;
        $var->U_email= $request->Email;
        $var->U_password= $request->Password;
        $var->Usertype= $request->Usertype;
        $var->U_profileimg= $request->Profileimg;
        $var->save();

        return $request;
        
    
           
        
          
        
    
    

        
    
      
    }

}
