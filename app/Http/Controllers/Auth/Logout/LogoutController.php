<?php

namespace App\Http\Controllers\Auth\Logout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogoutController extends Controller
{
    public function logout()
    {
        try {
            return redirect()->route('login');
        } catch (\Exception $e) {
            Log::error($e->getFile(). ' '. $e->getLine(). ' '. $e->getMessage());
            return redirect()->back()->withErrors([
                'errorMsg' => 'Something went wrong. Please try again later.'
            ]);
        }
    }
}
