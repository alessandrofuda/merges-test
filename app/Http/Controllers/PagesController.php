<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function pagina1()
    {
        return Inertia::render('Pagina1');
    }

    public function pagina2()
    {
        return Inertia::render('Pagina2');
    }

    public function pagina3()
    {
        return Inertia::render('Pagina3');
    }

    public function pagina5()
    {
        return Inertia::render('Pagina5');
    }
}
