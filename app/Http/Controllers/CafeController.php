<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CafeFormRequest;
use Illuminate\Support\Facades\Session;

class CafeController extends Controller
{
    public function home() 
    {
        return view('cafe.home');
    }
    public function login() 
    {
        return view('cafe.login');
    }

    public function store(CafeFormRequest $request)
    {
        $name = $request->get('name');
        $surname = $request->get('surname');
        $email = $request->get('email');

        Session::put(['name'=> $name, 'surname'=> $surname, 'email'=> $email]);

        return redirect()->route('cafe.info');
    }

    public function info()
    {
        return view('cafe.info');
    }

    public function logout()
    {
        Session::forget(['name', 'username', 'email']);
        
        return redirect()->route('cafe.home');
    }
}
