<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('your-view-with-contact-form');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer|min:16',
            'subject' => 'required|string',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
            'event' => 'nullable|string|max:255',
            'event_date' => 'nullable|date',
            'event_time' => 'nullable',
            'djs' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);

        $ticket = Ticket::create($validated);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
