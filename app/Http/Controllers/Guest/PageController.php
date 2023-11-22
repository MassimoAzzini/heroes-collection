<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;

class PageController extends Controller
{
    public function index(){
        $characters = Character::limit(10)->get();
        return view('home', compact('characters'));
    }
}
