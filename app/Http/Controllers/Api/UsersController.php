<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        if ($type = $request->get('type')) {
            return User::where('type', $type)->with('reviewee_profile')->get();
        }

        return User::with('reviewee_profile')->get();
    }
}
