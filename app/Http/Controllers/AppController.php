<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class AppController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
}
