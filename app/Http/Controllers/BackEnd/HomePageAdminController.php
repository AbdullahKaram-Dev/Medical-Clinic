<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function __invoke()
    {
        return view('back.admin-home');
    }
}
