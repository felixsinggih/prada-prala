<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $data = [
            'title'     => 'Dashboard Admin'
        ];
        return view('admin.dashboard.index', $data);
    }
}
