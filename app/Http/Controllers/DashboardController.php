<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    function __construct() {}

    public function index()
    {
        return view('auth.dashboard_user');
    }
}
