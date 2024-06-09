<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionMail;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $email = $request->input('email');

        // Wyślij email powitalny
        Mail::to($email)->send(new SubscriptionMail());

        return redirect()->back()->with('success', 'Dziękujemy za subskrypcję!');
    }
}
