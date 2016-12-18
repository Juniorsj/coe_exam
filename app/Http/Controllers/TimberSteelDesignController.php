<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RandomNumber;
use Storage;
use ManageContent;

class TimberSteelDesignController extends Controller
{
    public function index(Request $request)
    {
        $number = $request->input('number');
        $number = isset($number)? $number : 13;

        $contents = Storage::get('timber_steel.html');
        $contents = ManageContent::replaceUrlImage($contents);
        $data = ManageContent::setContent($contents, $number);

        return view('exam', ['data' => $data, 'title' => 'Timber and Steel Design']);
    }
}
