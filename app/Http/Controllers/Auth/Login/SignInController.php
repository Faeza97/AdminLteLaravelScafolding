<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SignInController extends Controller
{
    public function showForm()
    {
        $title = 'Login to App';

        return view('admin.pages.auth.signin.signin', compact('title'));
    }

    public function authenticateUser(Request $request) 
    {
        try {
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            Log::error($e->getFile(). ' '. $e->getLine(). ' '. $e->getMessage());
            return redirect()->back()->withErrors([
                'errorMsg' => 'Something went wrong. Please try again later.'
            ]);
        }
    }
}
