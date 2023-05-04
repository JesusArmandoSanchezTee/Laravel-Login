<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;


class RegisterController extends Controller
{
    //php artisan make:controller RegisterController

    public function show()
    {
        return view('app');
    }
    
    //php artisan make:request RegisterRequest

    public function register(RegisterRequest $request)
    {
        $user = User::create($request -> validated());
    }

}
