<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wp_users;
use Illuminate\Foundation\Auth\User;


class UsersController extends Controller
{

    //
    public function show()
    {
        $data = wp_users::all();
        return view('list', ['users'=>$data]);

    }
}
