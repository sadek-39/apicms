<?php

namespace App\Http\Controllers;

use App\Admin;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// use Tymon\JWTAuth\Facades\JWTAuth;
class AdminController extends Controller
{

    public function index()
    {
        return response('hello world', 200);

    }
    
    public function showAllAdmins()
    {
        return response()->json(Admin::all());

    }

    public function create(Request $request)
    {
        
        $admin=Admin::create($request->all());


        return response()->json($admin, 201);
        // return view('signup-payment');

    }
    public function showOneAdmin($id)
    {
        return response()->json(Admin::find($id));
    }

    public function update($id, Request $request)
    {
        $admin=Admin::findOrFail($id);
        $admin->update($request->all());

        return response()->json($admin, 200);
    }
    public function delete($id)
    {
        Admin::findOrFail($id)->delete();
        return response('Deleted Succefully',200);

    }
    // public function login(Request $request)
    // {
    //     // dd($request);
    //     //validate Data
    //     $this->validate($request,[
    //         'email'=>'required|email',
    //         'password'=>'required'
    //     ]);


    //     $input=$request->only('email','password');
    //     // dd($input);
    //     // $authorized=Auth::check($input);
    //     // dd($authorized);

    //      //$credentials = $request->only(['email', 'password']);

    //     if ( $token = Auth::attempt($input)) {
    //         return response()->json(['message' => 'Unauthorized'], 401);
    //     }else{
    //         return response()->json(['message'=>'authorized'],)
    //     }


    //     return $this->respondWithToken($token);
    // }


}








?>