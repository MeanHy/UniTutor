<?php

namespace Huyle\User\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Huyle\User\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function error(){
        return view("home.404");
    }
}
