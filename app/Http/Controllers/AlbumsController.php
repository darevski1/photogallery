<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index(){
    	return view('albums.index');
    }

    public function create(){
    	return view('albums.create');
    }

      public function store(Request $request){
      $this->validate($request, [
        'title' => 'required',
        'photo' => 'image|max:1999'
      ]);

      // Get filename with extension
      $filenameWithExt = $request->file('photo')->getClientOriginalName();

      // Get just the filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);


  }
}
