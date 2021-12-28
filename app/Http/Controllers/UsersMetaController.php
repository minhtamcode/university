<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wp_usermeta;


class UsersMetaController extends Controller
{
    //
    public function index($usermeta)
    {
        //
        return wp_usermeta::where('user_id',"=",$usermeta)->first();
    }
}
