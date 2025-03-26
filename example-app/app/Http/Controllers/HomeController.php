<?php

namespace App\Http\Controllers;

use Faker\Provider\ar_EG\Internet;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;
use Ramsey\Uuid\Type\Integer;
use Whoops\Handler\JsonResponseHandler;

class HomeController extends Controller
{
    //
    // function index(Request $request):JsonResponse{

    //     $code =201;
    //     $content=array('name'=>'sazidul','roll'=>435372, 'age'=>'23');
    //     return response()->json($content,$code);


    // }
    function index(Request $request){

       $password=$request->code;
       $data=[
              ['fname'=>$password, 'lname'=>'rahman','age'=>22],
              ['fname'=>'farhan', 'lname'=>'islam','age'=>42],
              ['fname'=>'john', 'lname'=>'doe','age'=>24],
              ['fname'=>'joram', 'lname'=>'natad','age'=>44],
              ['fname'=>'arif', 'lname'=>'billah','age'=>32]
             ];
      
          return view('myview',['users'=>$data]);
    
      
       
    }

    
      
    
}