<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pageCheck(){
        return view('page.index.landingpage');
    }


    public function pageContact(){
        return view('contactpage');
    }

    public function pageService(){
        $title = "Hello";
        $des = "This is a description";

        $data = [ 
            'itemOne' => "Bag",
            'itemTwo' => "Phone",
            'itemThree' => "Laptop",
            'itemFour' => "Headphone",
        ];

        return view('product.servicepage')->with('data',$data);
    }

    public function pageAbout(){
        return view('aboutpage');
    }

    public function pageTeams(){
        return view('teamspage');
    }
}