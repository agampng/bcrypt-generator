<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BcryptController extends Controller
{
    public function generate(Request $request)
    {
        $pwd = app('hash')->make($request->password_hash);

        return response($pwd);

    }
}
