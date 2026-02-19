<?php

namespace LDK\DashboardCleopatra\Http\Controllers;

use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return $this->analytics();
    }

    public function analytics()
    {
        return view('dashboard-cleopatra::pages.analytics');
    }

    public function ecommerce()
    {
        return view('dashboard-cleopatra::pages.ecommerce');
    }

    public function crypto()
    {
        return view('dashboard-cleopatra::pages.crypto');
    }

    public function uiElements()
    {
        return view('dashboard-cleopatra::pages.ui-elements');
    }

    public function tables()
    {
        return view('dashboard-cleopatra::pages.tables');
    }

    public function forms()
    {
        return view('dashboard-cleopatra::pages.forms');
    }

    public function profile()
    {
        return view('dashboard-cleopatra::pages.profile');
    }

    public function login()
    {
        return view('dashboard-cleopatra::pages.login');
    }
}
