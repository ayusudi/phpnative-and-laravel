<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home');
    }
    public function login()
    {
        return view('login');
    }
    public function listUser()
    {
        $data = User::all();
        $data->load('role');
        return view('listuser', [
            'data' => $data,
        ]);
    }
}
