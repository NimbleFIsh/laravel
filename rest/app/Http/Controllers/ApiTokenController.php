<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiTokenController extends Controller
{
    public function createToken()
    {
        return [ 'token' => User::find(1)->createToken('')->plainTextToken ];
    }
}