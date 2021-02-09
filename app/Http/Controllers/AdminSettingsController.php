<?php

namespace App\Http\Controllers;

use App\AdminSettings;
use Illuminate\Http\Request;
class AdminSettingsController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response

     */
    public function index(){
        return response()->json('hello settings');
    }

    //post form data from admin setings
    public function create(Request $request){
        $settings=AdminSettings::create($request->all());

        return response()->json($settings,201);
    }
    //fetch data from admin settings table
    public function show(){
        return response()->json(AdminSettings::all());
    }

}