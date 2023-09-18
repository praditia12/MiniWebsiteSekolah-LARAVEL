<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function profile(){
		return view('profile');
	}
 
	public function kopetensi(){
		return view('kopetensi');
	}
 
	public function galeri(){
		return view('galeri');
    }
}
