<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ClienteController;
use GuzzleHttp\Exception\GuzzleException;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');//USAMOS EL COMPACT PARA PASAR LA VARIABLE A LA VISTA
    }
}
