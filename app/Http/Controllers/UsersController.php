<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    /**
     * Get all favorite posts by user
     * 
     * @return response
     */

    public function myFavorites()
    {
        $myFavorites = Auth::user()->favorites;
    
        return view('users.my_favorites', compact('myFavorites'));
    }
}
