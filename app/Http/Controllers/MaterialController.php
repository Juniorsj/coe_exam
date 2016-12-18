<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RandomNumber;
use Storage;
use ManageContent;

class MaterialController extends Controller
{
    public function index(Request $request)
    {
    	$number = $request->input('number');
        $number = isset($number)? $number : 25;

        $contents = Storage::get('engineering_materials.html');
        $contents = ManageContent::replaceUrlImage($contents);
        $data = ManageContent::setContent($contents, $number);

        return view('exam', ['data' => $data, 'title' => 'Engineering Materials']);
    }
}
