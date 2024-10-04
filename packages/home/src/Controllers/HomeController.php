<?php

namespace Huyle\Home\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Huyle\Home\Models\User;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function error(){
        return view("home.404");
    }
}
