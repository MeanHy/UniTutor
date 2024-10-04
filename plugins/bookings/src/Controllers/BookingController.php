<?php

namespace Huyle\Bookings\Controllers;

use App\Http\Controllers\Controller;
use Huyle\Bookings\Models\Booking;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BookingController extends Controller
{
    public function index()
    {
        return view('login.login');
    }
}
