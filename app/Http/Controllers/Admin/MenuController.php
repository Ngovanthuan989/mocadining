<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Menu;

class MenuController extends Controller
{
    //
    public function create()
    {
        return view('admin.menu.create');
    }

    public function addPost(Request $request)
    {
        // dd($request->all());
        if($request->file('image') != ''|| $request->file('pdfMenu') != '' ){
            $path = public_path().'/uploads/Menu/images/';

            //upload new file image
            $file     =    $request -> file('image');
            $filename =    $file    -> getClientOriginalName();
            $file -> move($path, $filename);


            $pathPdf = public_path().'/uploads/Menu/pdf/';

            //upload new file pdf
            $filePdf     =    $request -> file('pdfMenu');
            $filenamePdf =    $filePdf -> getClientOriginalName();
            $filePdf -> move($pathPdf, $filenamePdf);


            $validate = Validator::make(

                $request->all(),
                [
                    'title'     => 'required',
                    'describe'  => 'required',

                ], [

                    'title.required'     => 'Tiêu đề không được bỏ trống',
                    'describe.required'   => 'Mô tả không được bỏ trống'

                ]

            );



            if ($validate -> fails()) {

                return redirect()->route('admin.introduce.create')->withErrors($validate);

            }

            $menu = new Menu;

            $menu -> title           = $request     -> get('title');
            $menu -> describe        = strip_tags($request -> get('describe'));
            $menu -> status          = $request     -> get('status');
            $menu -> image           = $filename;
            $menu -> pdfMenu         = $filenamePdf;

            $menu -> save();

            if ($menu->wasRecentlyCreated == true) {


                return redirect()->route('admin.menu.show')->with('success', 'Thêm thành công');

            }else{

                return redirect()->route('admin.menu.create')->with('error','Có lỗi xảy ra');

            }

        }else{

            return redirect()->route('admin.menu.create')->with('error','Vui Lòng Thêm File');

        }
        return view('admin.menu.create');
    }
}
