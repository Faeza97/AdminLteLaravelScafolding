<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Admin | Dasboard';

        return view('admin.pages.dashboard.dashboard', compact('title'));
    }
}
