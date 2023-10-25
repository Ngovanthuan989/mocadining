<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;


class MenuController extends Controller
{
    //
    public function index()
    {
        $get_menu = DB::table('menu')->get();

        return view('admin.menu.show',[
            'get_menu' => $get_menu
        ]);
    }
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

                return redirect()->route('admin.menu.create')->withErrors($validate);

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

    public function edit($id)
    {
        $edit_menu = DB::table('menu')->where([
            'id'=> $id
        ])->get();

        return view('admin.menu.edit',
            ['edit_menu'=>$edit_menu[0]]
        );
    }

    public function update(Request $request)
    {
        if($request->file('image') != '' && $request->file('pdfMenu') != '' ){
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

                return redirect()->route('admin.menu.create')->withErrors($validate);

            }


            $menu = Menu::where('id', $request->get('id'))->update(array(
                'title'       => $request->get('title'),
                'describe'    => strip_tags($request->get('describe')),
                'image'       => $filename,
                'pdfMenu'     => $filenamePdf,
                'status'      => $request->get('status'),
            ));


            if ($menu == 1) {

                return redirect()->route('admin.menu.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập Menu thành công');
            } else {

                return redirect()->route('admin.menu.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        }elseif($request->file('image') != '' && $request->file('pdfMenu') == '' ){
            $path = public_path().'/uploads/Menu/images/';

            //upload new file image
            $file     =    $request -> file('image');
            $filename =    $file    -> getClientOriginalName();
            $file -> move($path, $filename);

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

                return redirect()->route('admin.menu.create')->withErrors($validate);

            }


            $menu = Menu::where('id', $request->get('id'))->update(array(
                'title'       => $request->get('title'),
                'describe'    => strip_tags($request->get('describe')),
                'image'       => $filename,
                'status'      => $request->get('status'),
            ));


            if ($menu == 1) {

                return redirect()->route('admin.menu.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập Menu thành công');
            } else {

                return redirect()->route('admin.menu.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        }elseif($request->file('pdfMenu') != '' && $request->file('image') == '' ){
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

                return redirect()->route('admin.menu.create')->withErrors($validate);

            }


            $menu = Menu::where('id', $request->get('id'))->update(array(
                'title'       => $request->get('title'),
                'describe'    => strip_tags($request->get('describe')),
                'status'      => $request->get('status'),
                'pdfMenu'     => $filenamePdf,
            ));


            if ($menu == 1) {

                return redirect()->route('admin.menu.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập Menu thành công');
            } else {

                return redirect()->route('admin.menu.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        }else {

            $validate = Validator::make(

                $request->all(),
                [
                    'title'      => 'required',
                    'describe'   => 'required',

                ], [

                    'title.required'     => 'Tiêu đề không được bỏ trống',
                    'describe.required'   => 'Mô tả không được bỏ trống'

                ]

            );


            if ($validate -> fails()) {

                return redirect()->route('admin.menu.create')->withErrors($validate);

            }


            $menu = Menu::where('id', $request->get('id'))->update(array(
                'title'       => $request->get('title'),
                'describe'    => strip_tags($request->get('describe')),
                'status'      => $request->get('status'),
            ));


            if ($menu == 1) {

                return redirect()->route('admin.menu.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập menu thành công');
            } else {

                return redirect()->route('admin.menu.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        }
    }
}
