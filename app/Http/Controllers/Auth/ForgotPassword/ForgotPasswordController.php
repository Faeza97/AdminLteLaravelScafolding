<?php

namespace App\Http\Controllers\Auth\ForgotPassword;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ForgotPasswordController extends Controller
{
    public function showForm()
    {
        $title = 'Forgot Password';

        return view('admin.pages.auth.forgotPassword.forgotPassword', compact('title'));
    }

    public function showRecoverForm(Request $request)
    {
        try {
            $title = 'Recover Password';
            $user = 'User Get By Email';  // DB QUERY

            return view('admin.pages.auth.forgotPassword.recoverPassword', compact('title', 'user'));
        } catch (\Exception $e) {
            Log::error($e->getFile() . ' ' . $e->getLine() . ' ' . $e->getMessage());
            return redirect()->back()->withErrors([
                'errorMsg' => 'Something went wrong. Please try again later.'
            ]);
        }
    }

    public function resetPassword(Request $request)
    {
        try {
            // reset password code goes here
            return redirect()->route('login');
        } catch (\Exception $e) {
            Log::error($e->getFile() . ' ' . $e->getLine() . ' ' . $e->getMessage());
            return redirect()->back()->withErrors([
                'errorMsg' => 'Something went wrong. Please try again later.'
            ]);
        }
    }
}
