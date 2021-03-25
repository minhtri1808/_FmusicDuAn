<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class dashboardController extends Controller
{
    public function anlystic()
    {
        return view('admin.anlystic');
    }
}
