<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    
    public function index()
    {
        return view('admin.dashboard');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
 
    public function commen_item_creation()
    {
        return view('admin.item.commen_item_creation');
    }
 
    public function serial_item_creation()
    {
        return view('admin.item.serial_item_creation');
    }
 
    public function vehicle_item_creation()
    {
        return view('admin.item.vehicle_item_creation');
    }
 
    public function category()
    {
        return view('admin.category.category');
    }
}
