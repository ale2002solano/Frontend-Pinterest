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

        public function index() {
            try {
                // Lógica de tu controlador
                return view('feed');
            } catch (\Exception $e) {
                dd($e->getMessage()); // Agrega esta línea para ver el mensaje de error
            }

    }
    
    
}
