<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class VideoController extends Controller {
// `    public function __invoke()
// {
//     // Your controller logic here
// }`
    public function index(){

        return view('videos.index');
    }


    public function create(){

        return view('videos.create');
    }

    public function store(Request $request){
        
        dd($request->all());

    }
} 