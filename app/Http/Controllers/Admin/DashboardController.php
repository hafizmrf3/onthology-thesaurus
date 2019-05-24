<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Category;
use App\Thesaurus;
use Session;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;


class DashboardController extends Controller
{
    public function index()
    {
                 
        Session::flash('LastSign', 'Notification');
        ini_set('memory_limit','256M');
        $thesauruses = Thesaurus::all();
        $categories = Category::all();
        return view('admin.dashboard', compact('thesauruses', 'categories'));

    }
}
