<?php

namespace Huyle\pay\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Huyle\Pay\Models\User;
use Inertia\Inertia;

class PayController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function error(){
        return view("home.404");
    }
}
