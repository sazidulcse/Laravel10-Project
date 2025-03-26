<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //about function 
    function About(){
        return view('about');
    }

    //about function 
    function Service(){
        return view('about');
    }

    //about function 
    function Skill(){
        return view('about');
    }


    //about function 
    function Contact(){
        return view('about');
    }

    function test(Request $request){

       return $request->header();
       
    }







}
