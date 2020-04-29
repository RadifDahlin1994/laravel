<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\user;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about',['nama' => 'Radif dahlin rahmana']);
    }
   
}