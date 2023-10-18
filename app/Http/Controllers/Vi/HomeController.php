<?php

namespace App\Http\Controllers\Vi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('vi.home.index');
    }
}
