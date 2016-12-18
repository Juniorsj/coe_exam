<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RandomNumber;
use Storage;
use ManageContent;

class ReinforcedConcreteDesignController extends Controller
{
    public function index(Request $request)
    {
    	$number = $request->input('number');
        $number = isset($number)? $number : 12;

        $contents = Storage::get('reinforced_concrete.html');
        $contents = ManageContent::replaceUrlImage($contents);
        $data = ManageContent::setContent($contents, $number);

        return view('exam', ['data' => $data, 'title' => 'Reinforced Concrete Design']);
    }
}
