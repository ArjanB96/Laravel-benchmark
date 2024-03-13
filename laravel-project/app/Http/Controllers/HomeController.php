<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('welcome'); // Dit verwijst naar een welkomstpagina. Pas het aan als je een andere weergave wilt weergeven.
    }
}

