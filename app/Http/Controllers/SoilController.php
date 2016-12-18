<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RandomNumber;
use Storage;
use ManageContent;

class SoilController extends Controller
{
    public function index(Request $request)
    {
       	$number = $request->input('number');
        $number = isset($number)? $number : 25;

        $contents = Storage::get('soil.html');
        $contents = ManageContent::replaceUrlImage($contents);
        $data = ManageContent::setContent($contents, $number);

        return view('exam', ['data' => $data, 'title' => 'Soil Mechanic']);
    }
}
