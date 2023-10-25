<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Event;

class EventController extends Controller
{
    //
    public function index()
    {
        $get_event = DB::table('event')->get();

        return view('admin.event.show',[
            'get_event' => $get_event
        ]);
    }

    public function create()
    {
        return view('admin.event.create');
    }

    public function addPost(Request $request)
    {
        // dd($request->all());
        if($request->file('image') != ''){
            $path = public_path().'/uploads/Event/images/';

            //upload new file
            $file     =    $request -> file('image');
            $filename =    $file    -> getClientOriginalName();
            $file -> move($path, $filename);


            $validate = Validator::make(

                $request->all(),
                [
                    'title'     => 'required',
                    'content'   => 'required',

                ], [

                    'title.required'     => 'Tiêu đề không được bỏ trống',
                    'content.required'   => 'Nội dung không được bỏ trống'

                ]

            );



            if ($validate -> fails()) {

                return redirect()->route('admin.event.create')->withErrors($validate);

            }

            if($request -> get('linkMenu') !=''){
                $linkMenu = $request -> get('linkMenu');
            }else{
                $linkMenu = '';
            }

            $event = new Event;

            $event -> title           = $request -> get('title');
            $event -> content         = $request -> get('content');
            $event -> status          = $request -> get('status');
            $event -> image           = $filename;
            $event -> linkMenu        = $linkMenu;

            $event -> save();

            if ($event->wasRecentlyCreated == true) {


                return redirect()->route('admin.event.show')->with('success', 'Thêm thành công');

            }else{

                return redirect()->route('admin.event.create')->with('error','Có lỗi xảy ra');

            }

        }else{

            return redirect()->route('admin.event.create')->with('error','Xin vui lòng chọn ảnh');

        }
        return view('admin.event.create');
    }

    public function edit($id)
    {
        $edit_event = DB::table('event')->where([
            'id'=> $id
        ])->get();

        return view('admin.event.edit',
            ['edit_event'=>$edit_event[0]]
        );
    }

    public function update(Request $request)
    {
        if ($request->file('image') != '') {
            $path = public_path().'/uploads/Event/images/';

            //upload new file
            $file     =    $request -> file('image');
            $filename =    $file    -> getClientOriginalName();
            $file -> move($path, $filename);


            $validate = Validator::make(

                $request->all(),
                [
                    'title'     => 'required',
                    'content'   => 'required',

                ], [

                    'title.required'     => 'Tiêu đề không được bỏ trống',
                    'content.required'   => 'Nội dung không được bỏ trống'

                ]

            );


            if ($validate -> fails()) {

                return redirect()->route('admin.event.create')->withErrors($validate);

            }

            if($request -> get('linkMenu') !=''){
                $linkMenu = $request -> get('linkMenu');
            }else{
                $linkMenu = '';
            }

            $event = Event::where('id', $request->get('id'))->update(array(
                'title'       => $request->get('title'),
                'content'     => $request->get('content'),
                'image'       => $filename,
                'status'      => $request->get('status'),
                'linkMenu'    => $linkMenu,
            ));


            if ($event == 1) {

                return redirect()->route('admin.event.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập event thành công');
            } else {

                return redirect()->route('admin.event.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        } else {

            $validate = Validator::make(

                $request->all(),
                [
                    'title'     => 'required',
                    'content'   => 'required',

                ], [

                    'title.required'     => 'Tiêu đề không được bỏ trống',
                    'content.required'   => 'Nội dung không được bỏ trống'

                ]

            );


            if ($validate -> fails()) {

                return redirect()->route('admin.event.create')->withErrors($validate);

            }

            if($request -> get('linkMenu') !=''){
                $linkMenu = $request -> get('linkMenu');
            }else{
                $linkMenu = '';
            }

            $event = Event::where('id', $request->get('id'))->update(array(
                'title'       => $request->get('title'),
                'content'     => $request->get('content'),
                'status'      => $request->get('status'),
                'linkMenu'    => $linkMenu,
            ));


            if ($event == 1) {

                return redirect()->route('admin.event.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập event thành công');
            } else {

                return redirect()->route('admin.event.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table('event')->where('id', $request->get('id'))->delete();

        if ($delete == 1) {
            return redirect()->route('admin.event.show')->with('success', 'Xoá event thành công!');
        } else {
            return redirect()->route('admin.event.show')->with('error', 'Xoá event không thành công!');
        }
    }
}
