<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RiderManagementController extends Controller
{
    public function index()
    {
        return view('admin.riders.index'); // Change view as needed
    }
    //
}
