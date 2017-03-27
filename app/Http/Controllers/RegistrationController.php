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

      $user = User::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' => bcrypt(request('password')),
      ]);

      auth()->login($user);

      return redirect('/');
    }
}
