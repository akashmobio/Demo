<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EncryptionController extends Controller
{
    public function encrypt()
    {
        $encrypted = Crypt::encryptString('Hello This is encrypted String');
        return $encrypted;
    }
    public function decrypt()
    {
        $decrypted = Crypt::decryptString('eyJpdiI6ImVjalh3YWYwQlNkZzd6ZzZtUjh2QVE9PSIsInZhbHVlIjoiOWM4RWpMVE55V1BZRk8xMGpWRUY0ZitDc2ZqdUw4S0FJSTByTlF1bVFkMD0iLCJtYWMiOiJlNjZiMDEwZjVhYjNmYmIyZDk2YWFjZDUyMWMwMGFiMWQ2NzQ1NmM3MjkxOTUwNWY2M2FlZDkxMGFhYTNiNDNlIiwidGFnIjoiIn0=');
        return $decrypted;
    }
}
