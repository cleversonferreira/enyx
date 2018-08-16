<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiToken(Request $request)
    {
        $data = $request->only('email', 'password');
        $token = \Auth::guard('api')->attempt($data);

        return User::verifyLoginToken($token);
    }
}
