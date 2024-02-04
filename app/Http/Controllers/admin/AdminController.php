<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function adminDashboard(Request $req){

        return view('admin/admin_dashboard');
    }

    public function section(Request $req){

        return view('admin/section');
    }

    public function ui(Request $req){

        return view('admin/ui');
    }

    public function tab(Request $req){

        return view('admin/tab');
    }
    
    public function table(Request $req){

        return view('admin/table');
    }

    public function blank(Request $req){

        return view('admin/blank');
    }

    public function category(Request $req){

        return view('admin/category');
    }

    public function adminLogout(){
        
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
