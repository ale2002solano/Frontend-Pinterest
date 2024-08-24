<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ClienteController;
use GuzzleHttp\Exception\GuzzleException;

use Illuminate\Support\Facades\File;

class FeedController extends Controller
{
    //

    /*public function image()
    {
        Obtener todas las imágenes de la carpeta 'public/img'
        $images = File::files(public_path('img'));

        return view('feed', compact('images'));
    }*/

    public function index() {
        return view('feed');
    }
    
}
