<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FeedController extends Controller
{
    //

    public function index()
    {
        // Obtener todas las imágenes de la carpeta 'public/img'
        $images = File::files(public_path('img'));

        return view('feed', compact('images'));
    }
}
