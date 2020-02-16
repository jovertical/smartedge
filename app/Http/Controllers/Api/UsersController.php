<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($type = $request->get('type')) {
            if ($type === 'reviewee') {
                return User::where('type', 'reviewee')
                    ->with('reviewee_profile')
                    ->get();
            }
        
            return User::where('type', $type)->get();
        }

        return User::all();
    }
}
