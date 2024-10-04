<?php

namespace Huyle\Profile\Controllers;

use App\Http\Controllers\Controller;
use Huyle\Profile\Models\Booking;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentController extends Controller
{
    public function index()
    {
        return view('profile.student');
    }
}
