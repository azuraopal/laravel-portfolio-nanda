<?php

namespace App\Http\Controllers;
use App\Models\Projek;
use Illuminate\Http\Request;

class ProjekController extends Controller
{
    public function index()
    {
        $projek = Projek::all();
        return view ('projek', compact('projek'));
    }
}
