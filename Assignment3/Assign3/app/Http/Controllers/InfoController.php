<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function showForm()
    {
        return view('infoView');
    }

    public function handleForm(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'Sex' => 'required|in:male,female', 
            'Mobilephone' => 'required|regex:/^09[0-9]{2}-[0-9]{3}-[0-9]{4}$/', 
            'Telephone-Number' => 'required|numeric', 
            'Birthdate' => 'required|date_format:Y-m-d', 
            'Address' => 'required|string|max:100',
            'Email' => 'required|email|max:100',
            'Website' => 'required|url',
        ]);

     
        return back()->with('success', 'Form submitted successfully!');
    }
}