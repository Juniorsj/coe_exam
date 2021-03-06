<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RandomNumber;
use Storage;
use ManageContent;

class EnvironmentalController extends Controller
{
    public function index(Request $request)
    {
        $number = $request->input('number');
        $number = isset($number)? $number : 13;

        $contents = Storage::get('environmental.html');
        $contents = ManageContent::replaceUrlImage($contents);
        $data = ManageContent::setContent($contents, $number);
        
        return view('exam', ['data' => $data, 'title' => 'Environmental Systems and Management']);
    }
}
