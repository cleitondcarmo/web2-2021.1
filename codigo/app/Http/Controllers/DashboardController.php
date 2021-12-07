<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Dashboard;

class DashboardController extends Controller
{
    public function showdashboard(){
        return view('dashboard.show');
    }
}
