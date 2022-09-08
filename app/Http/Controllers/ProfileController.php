<?php
 
namespace App\Http\Controllers;
 
use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
 
class ProfileController extends Controller {
 
    /**
     * Update the user's profile.
     *
     * @return Response
     */
    public function updateProfile()
    {
        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
        }
    }
 
}