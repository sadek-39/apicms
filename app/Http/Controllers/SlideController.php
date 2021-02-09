<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Slider;

use Illuminate\Http\Request;

class SlideController extends Controller
{
	public function create(Request $request)
	{
		$slide=Slide::create($request->all());
		return response()->json($slide,201);
	}
	public function show()
	{
		$slide=Slide::find(1);
		var_dump($slide);
	}






}