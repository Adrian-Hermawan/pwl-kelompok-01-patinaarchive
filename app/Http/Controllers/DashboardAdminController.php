<?php

namespace App\Http\Controllers;


class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('dashboard-admin');
    }
}
