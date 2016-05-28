<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Symfony\Component\HttpFoundation\File\UploadedFile;

use DB;

class GalleryController extends Controller
{
    public function index()
    {
      
        return view('gallery.index');
    }
    
    public function create()
    {
        return view('gallery.create');
    }
    
    public function store(Request $request)
    {
        //get request data
        $name = $request->input('name');
        $description = $request->input('description');
        $cover_image = $request->file('cover_image');
        $owner_id = 1;
        
        //check if uploaded
        if($cover_image)
        {
            $cover_image_filename = $cover_image->getClientOriginalName();
            $cover_image->move(public_path('/images'), $cover_image_filename);
        }
        else
        {
            $cover_image_filename = 'noimage.jpg';
        }
        
         //Insert into DB
        DB::table('galleries')->insert(
            [
              'name' => $name,
              'description' => $description,
              'cover_image' => $cover_image_filename,
              'owner_id' => $owner_id
          ]
        );
        
        //Redirect
        return \Redirect::route('gallery.index')->with('messsage', 'Gallery Created');
    }
    
    public function show($id)
    {
        die($id);
    }
}
