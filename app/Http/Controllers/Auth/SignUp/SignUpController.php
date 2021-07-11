<?php

namespace App\Http\Controllers\Auth\SignUp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SignUpController extends Controller
{
    public function showForm()
    {
        $title = 'Signup to App';

        return view('admin.pages.auth.signup.signup', compact('title'));
    }

    public function register(Request $request) 
    {
        try {
            // Signup code goes here
            return redirect()->route('login');
        } catch (\Exception $e) {
            Log::error($e->getFile(). ' '. $e->getLine(). ' '. $e->getMessage());
            return redirect()->back()->withErrors([
                'errorMsg' => 'Something went wrong. Please try again later.'
            ]);
        }
    }
}
