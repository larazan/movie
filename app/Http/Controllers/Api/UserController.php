<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function user_list(Request $request)
    {
        $users = User::all();

        $data = [
            'total_size' => $users->count(),
            'results' => $users
        ];

        return response()->json($data, 200);
    }
}
