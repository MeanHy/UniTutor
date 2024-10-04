<?php

namespace Huyle\Wishlist\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Huyle\Wishlist\Models\User;
use Inertia\Inertia;

class WishlistController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function error(){
        return view("home.404");
    }
}
