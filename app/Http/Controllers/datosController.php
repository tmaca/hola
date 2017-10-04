<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dato;

class datosController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function adios()
    {
        return view('adios');
    }
    public function adiospost(Request $request)
    {


        Dato::create($request->all());
        return view('adiospost2');
    }
}
