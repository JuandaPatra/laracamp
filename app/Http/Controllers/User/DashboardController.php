<?php

namespace App\Http\Controllers\User;

use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('Camp')->whereUserId(Auth::id())->get();
        // return $checkouts;
        return view('user.dashboard',compact('checkouts'));
    }
}
