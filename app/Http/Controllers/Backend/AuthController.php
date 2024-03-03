<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
        return view('backend.auth.login');
    }
    public function login(AuthRequest $request) {
    }
}
