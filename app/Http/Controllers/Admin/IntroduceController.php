<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Introduce;

class IntroduceController extends Controller
{
    //
    public function index()
    {
        $get_introduce = DB::table('introduce')->get();

        return view('admin.introduce.show',[
            'get_introduce' => $get_introduce
        ]);
    }

    public function create()
    {
        return view('admin.introduce.create');
    }

    public function addPost(Request $request)
    {
        // dd($request->all());
        if($request->file('image') != ''){
            $path = public_path().'/uploads/Introduce/images/';

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

                return redirect()->route('admin.introduce.create')->withErrors($validate);

            }

            $introduce = new Introduce;

            $introduce -> title           = $request     -> get('title');
            $introduce -> content         = strip_tags($request     -> get('content'));
            $introduce -> status          = $request     -> get('status');
            $introduce -> image           = $filename;

            $introduce -> save();

            if ($introduce->wasRecentlyCreated == true) {


                return redirect()->route('admin.introduce.show')->with('success', 'Thêm thành công');

            }else{

                return redirect()->route('admin.introduce.create')->with('error','Có lỗi xảy ra');

            }

        }else{

            return redirect()->route('admin.introduce.create')->with('error','Xin vui lòng chọn ảnh');

        }
        return view('admin.introduce.create');
    }

    public function edit($id)
    {
        $edit_introduce = DB::table('introduce')->where([
            'id'=> $id
        ])->get();

        return view('admin.introduce.edit',
            ['edit_introduce'=>$edit_introduce[0]]
        );
    }

    public function update(Request $request)
    {
        if ($request->file('image') != '') {
            $path = public_path().'/uploads/Introduce/images/';

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

                return redirect()->route('admin.introduce.create')->withErrors($validate);

            }


            $introduce = Introduce::where('id', $request->get('id'))->update(array(
                'title'       => $request->get('title'),
                'content'     => $request->get('content'),
                'image'  => $filename,
                'status'      => $request->get('status'),
            ));


            if ($introduce == 1) {

                return redirect()->route('admin.introduce.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập introduce thành công');
            } else {

                return redirect()->route('admin.introduce.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
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

                return redirect()->route('admin.introduce.create')->withErrors($validate);

            }


            $introduce = Introduce::where('id', $request->get('id'))->update(array(
                'title'       => $request->get('title'),
                'content'     => $request->get('content'),
                'status'      => $request->get('status'),
            ));


            if ($introduce == 1) {

                return redirect()->route('admin.introduce.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập introduce thành công');
            } else {

                return redirect()->route('admin.introduce.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        }
    }
}
