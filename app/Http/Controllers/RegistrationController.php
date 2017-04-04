<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registrations.create');
    }

    public function store(RegistrationForm $request)
    {
        $request->persist();

        session()->flash('message', 'Thanks for registration');

        return redirect()->home();
    }
}
