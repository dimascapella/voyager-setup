<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::with('user')->get();

        return view('landing', [
            'comics' => $comics
        ]);
    }
}
