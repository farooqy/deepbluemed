<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;

class mainController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function openIndexPage()
    {
        $user = new User();
        return view('admin.index', compact('user'));
    }
}
