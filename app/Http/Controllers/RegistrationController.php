<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function show()
    {
      return view('register');
    }

    public function store()
    {
      $this->validate(request(), [
        'name' => 'required|min:4',
        'email' => 'required|email',
        'password' => 'required|min:4',
      ]);

      User::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' => request('password'),
      ]);

      return redirect('/');
    }
}
