<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home() {
        $name = 'Benito Cassa';

        return view('pages.home', compact('name'));
    }

    public function element($index) {
        $data = [
            [
                'title' => 'titolo 1',
                'desc' => 'desc 1'                
            ],
            [
                'title' => 'titolo 2',
                'desc' => 'desc 2'                
            ],
            [
                'title' => 'titolo 3',
                'desc' => 'desc 3'                
            ],
            [
                'title' => 'titolo 4',
                'desc' => 'desc 4'                
            ]
        ];
        $elem = $data[$index];
        return view('pages.element', compact('elem'));
    }
}
