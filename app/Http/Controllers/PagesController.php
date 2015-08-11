<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function about()
    {
        $data = [
            'first' => 'Dylan',
            'last'  => 'Woot',
        ];

        $people = [
            'John Johnson', 'Yay yay', 'Woo woo'
        ];

        return view('pages.about', compact('people'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
