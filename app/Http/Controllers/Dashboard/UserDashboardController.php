<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class UserDashboardController extends Controller
{
    public function index()
    {
        return redirect()->route('expenses.index');
    }
}