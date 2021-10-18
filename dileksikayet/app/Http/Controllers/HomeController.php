<?php

namespace App\Http\Controllers;

use App\Models\Dilekmodel;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data = Dilekmodel::orderByDesc('created_at')->get();
        return view('home', ['data' => $data]);
    }
}
