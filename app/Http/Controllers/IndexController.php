<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($value='')
    {
        $data = [
            'computer' => [
                'route' => 'computer',
                'title' => 'Computer Programming',
                'number'    => 25,
            ],
            'material'  => [
                'route' => 'material',
                'title' => 'Engineering Materials',
                'number'    => 25,
            ],
            'drawing'  => [
                'route' => 'drawing',
                'title' => 'Engineering Drawings',
                'number'    => 25,
            ],
            'mechanic'  => [
                'route' => 'mechanic',
                'title' => 'Engineering Mechanic Static',
                'number'    => 25,
            ],
            'theory_structure'  => [
                'route' => 'theory.structure',
                'title' => 'Theory of Structures',
                'number'    => 12,
            ],
            'structure_analysis'  => [
                'route' => 'structure.analysis',
                'title' => 'Structural Analysis',
                'number'    => 13,
            ],
            'reinforce_concrete'  => [
                'route' => 'reinforce.concrete',
                'title' => 'Reinforced Concrete Design',
                'number'    => 12,
            ],
            'timber_steel'  => [
                'route' => 'timber.steel',
                'title' => 'Timber and Steel Design',
                'number'    => 13,
            ],
            'soil'  => [
                'route' => 'soil',
                'title' => 'Soil Mechanics',
                'number'    => 25,
            ],
            'construction'  => [
                'route' => 'construction',
                'title' => 'Construction Management',
                'number'    => 12,
            ],
            'environmental'  => [
                'route' => 'environmental',
                'title' => 'Environmental Systems and Management',
                'number'    => 13,
            ],
        ];
        return view('index', ['data' => $data]);
    }
}
