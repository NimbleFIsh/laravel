<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiUserController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        return [ 'id' => $user->id, 'name' => $user->name, 'email' => $user->email ];
    }
}