<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PhotoController extends Controller
{
    
    public function create()
    {
        die('PHOTO/CREATE');
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show($id)
    {
        die($id);
    }
}
