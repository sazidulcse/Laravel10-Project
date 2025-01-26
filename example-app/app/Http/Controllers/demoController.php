<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    //

    function SessionPut(Request $request):bool{

        $email=$request->email;
        $request->session()->put('userEmail',$email);
        return true;
    }

    function SessionPull(Request $request){

       return $request->session()->pull('userEmail','defult');
       
    }

    function SessionGet(Request $request){

        return $request->session()->get('userEmail','defult');
        
     }

     function SessionForget(Request $request):bool{

        $request->session()->forget('userEmail');
        return true;
        
     }
 
 




}
