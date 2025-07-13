<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class contact extends Controller
{
    public function home () {
       return view('pages.contact');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'phone' => 'required',
            'message' => 'required|string|max:1000',
        ]);

        $data = $request->only(['name', 'email', 'phone', 'message']);

        // Log এ ইউজার ইনপুট লেখো
        Log::info('Contact form submitted', $data);

        // Session flash + redirect
        return redirect()->route('contact.confirmation')->with([
            'success' => 'Your message has been sent successfully!',
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'message' => $data['message'],
        ]);
    }

    public function confirmation(Request $request) {
        // Confirmation page
        return view('pages.contact_confirmation', [
            'name' => $request->session()->get('name'),
            'email' => $request->session()->get('email'),
            'phone' => $request->session()->get('phone'),
            'message' => $request->session()->get('message'),
        ]);
    }


}