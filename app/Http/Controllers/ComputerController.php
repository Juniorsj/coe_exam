<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use RandomNumber;
use ManageContent;

class ComputerController extends Controller
{
   public function index(Request $request)
   {	
   		$number = $request->input('number');
   		$number = isset($number)? $number : 25;

        $contents = Storage::get('computer_programming.html');
        $contents = ManageContent::replaceUrlImage($contents);
        $data = ManageContent::setContent($contents, $number);
        return view('exam', ['data' => $data, 'title' => 'Computer Programming']);
   }


}
