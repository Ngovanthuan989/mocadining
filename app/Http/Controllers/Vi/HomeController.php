<?php

namespace App\Http\Controllers\Vi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    //
    public function index()
    {
        return view('vi.home.index');
    }

    public function introduce()
    {
        $get_introduce = DB::table('introduce')->get();
        return view('vi.home.introduce',[
            'get_introduce' => $get_introduce
        ]);
    }

    public function menu()
    {
        $get_menu = DB::table('menu')->get();
        return view('vi.home.menu',[
            'get_menu' => $get_menu
        ]);
    }

    public function event()
    {
        $get_event = DB::table('event')->get();
        return view('vi.home.events',[
            'get_event' => $get_event
        ]);
    }

    public function image()
    {
        $get_catalogImage = DB::table('catalogImage')->get();
        $get_image = DB::table('image')->get();
        return view('vi.home.image',[
            'get_catalogImage' => $get_catalogImage,
            'get_image'        => $get_image
        ]);
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
