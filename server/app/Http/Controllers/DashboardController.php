<?php

namespace App\Http\Controllers;

use App\Models\Tip;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        $administrator_users_count = User::where('is_admin', true)->count();
        $users_count =  User::count();
        $tips_count =  Tip::count();


        return view('dashboard', ['administrator_users_count' => $administrator_users_count, 'users_count' => $users_count, 'tips_count' => $tips_count]);
    }
}
