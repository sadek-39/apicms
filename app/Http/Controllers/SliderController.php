<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Slide;

use Illuminate\Http\Request;

class SliderController extends Controller
{
	public function create( Request $request)
	{
		$slider=Slider::create($request->all());

		return response()->json($slider,201);
	}
	public function showallslider()
    {
        return response()->json(Slider::all());

    }
    public function update($id, Request $request)
    {
    	$slider=Slider::findOrFail($id);
    	$slider->update($request->all());

    	return response()->json($slider,200);


    }

    public function singleslider($id)
    {
    	return response()->json(Slider::find($id));
    
    }

    public function show($sid)
    {
    	 $slider =( Slider::find($sid)->slide);
         //var_dump($slider);
         
         //echo($slider->id);
         


        // return view('test',compact('slider'));
        return response()->json($slider,200);

        
    }

    
}