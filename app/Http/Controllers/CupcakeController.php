<?php

namespace App\Http\Controllers;

use App\Models\Cupcake;
use Illuminate\Http\Request;

class CupcakeController extends Controller
{
    public function index()
    {
        $cupcakes = Cupcake::all();

        return view('cupcakes.index', compact('cupcakes'));
    }

    public function show($id)
    {
        $cupcake = Cupcake::findOrFail($id);

        return view('cupcakes.show', compact('cupcake'));
    }
}
