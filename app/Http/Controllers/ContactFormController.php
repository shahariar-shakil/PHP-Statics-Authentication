<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Storage;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'message' => 'required',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
        } else {
            $imageName = null;
        }

        // Save the contact form data
        ContactForm::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'image' => $imageName,
            'message' => $request->message,
        ]);

        return redirect()->route('contact.create')->with('success', 'Message sent successfully!');
    }
}
