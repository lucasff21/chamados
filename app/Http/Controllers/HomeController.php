<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() 
    {
        $events = Event::all();
        return view('chamados', ['events' => $events]);
    }
}
