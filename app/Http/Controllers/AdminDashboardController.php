<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        $users= User::orderBy("id", "desc")->get();
        return view("admin.admin-dashboard", compact("users"));
    }
}
