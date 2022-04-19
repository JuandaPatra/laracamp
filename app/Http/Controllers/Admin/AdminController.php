<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Checkout\ConfirmPaid;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function update(Request $request, Checkout $checkout)
    {
        // return $checkout;

        $checkout->is_paid = true;
        $checkout->save();
        Mail::to($checkout->user->email)->send(new ConfirmPaid($checkout));
        $request->session()->flash('success', "Checkout with ID {$checkout->id} has been updated!");
        
        return redirect(route('admin.dashboard'));
    }
}
