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

    public function introduce()
    {
        return view('vi.home.introduce');
    }

    public function menu()
    {
        return view('vi.home.menu');
    }

    public function event()
    {
        return view('vi.home.events');
    }

    public function image()
    {
        return view('vi.home.image');
    }

    public function news()
    {
        return view('vi.home.news&promotion');
    }

    public function contact()
    {
        return view('vi.home.contact');
    }
}
