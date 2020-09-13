<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Role;
use App\Prescription;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::get();
        $roles = Role::where('name', 'doctor')->first();
        $infos = $roles->users;
        $prescriptions = Prescription::where('user_id', '=', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('/home')->with([
            'users'=>$users,
            'infos'=>$infos,
            'prescriptions'=>$prescriptions
        ]);
    }
}
