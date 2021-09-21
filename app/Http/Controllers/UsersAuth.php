<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\CheckEvent;

class UsersAuth extends Controller
{
    public function index()
    {
        event(new CheckEvent('Email has been send to your email address'));
    }
}
