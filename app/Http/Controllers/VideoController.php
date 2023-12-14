<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Routing\Controller;

class VideoController extends Controller {
// `    public function __invoke()
// {
//     // Your controller logic here
// }`
    public function index(){

        $videos = Video::find(1);
        dd($videos);
    }
} 