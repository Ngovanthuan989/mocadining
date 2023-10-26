<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Image;


class ImageController extends Controller
{
    //
    public function index()
    {
        $get_image = DB::table('image')->get();

        return view('admin.image.show',[
            'get_image' => $get_image
        ]);
    }

    public function create()
    {
        $get_catalogImage = DB::table('catalogImage')->get();

        return view('admin.image.create',[
            'get_catalogImage' => $get_catalogImage
        ]);
    }

    public function addPost(Request $request)
    {
        // dd($request->all());
        if($request->file('image') != ''){
            $path = public_path().'/uploads/Image/';

            //upload new file
            $file     =    $request -> file('image');
            $filename =    $file    -> getClientOriginalName();
            $file -> move($path, $filename);


            // $validate = Validator::make(

            //     $request->all(),
            //     [
            //         'title'     => 'required',
            //         'content'   => 'required',

            //     ], [

            //         'title.required'     => 'Tiêu đề không được bỏ trống',
            //         'content.required'   => 'Nội dung không được bỏ trống'

            //     ]

            // );



            // if ($validate -> fails()) {

            //     return redirect()->route('admin.introduce.create')->withErrors($validate);

            // }

            $image = new Image;

            $image -> catalogImage    = $request     -> get('catalogImage');
            $image -> status          = $request     -> get('status');
            $image -> image           = $filename;

            $image -> save();

            if ($image->wasRecentlyCreated == true) {


                return redirect()->route('admin.image.show')->with('success', 'Thêm thành công');

            }else{

                return redirect()->route('admin.image.create')->with('error','Có lỗi xảy ra');

            }

        }else{

            return redirect()->route('admin.image.create')->with('error','Xin vui lòng chọn ảnh');

        }
        return view('admin.image.create');
    }

    public function edit($id)
    {
        $edit_image = DB::table('image')->where([
            'id'=> $id
        ])->get();

        return view('admin.image.edit',
            ['edit_image'=>$edit_image[0]]
        );
    }

    public function update(Request $request)
    {
        if ($request->file('image') != '') {
            $path = public_path().'/uploads/Image/';

            //upload new file
            $file     =    $request -> file('image');
            $filename =    $file    -> getClientOriginalName();
            $file -> move($path, $filename);


            // $validate = Validator::make(

            //     $request->all(),
            //     [
            //         'title'     => 'required',
            //         'content'   => 'required',

            //     ], [

            //         'title.required'     => 'Tiêu đề không được bỏ trống',
            //         'content.required'   => 'Nội dung không được bỏ trống'

            //     ]

            // );


            // if ($validate -> fails()) {

            //     return redirect()->route('admin.introduce.create')->withErrors($validate);

            // }


            $image = Image::where('id', $request->get('id'))->update(array(
                'catalogImage' => $request->get('catalogImage'),
                'image'        => $filename,
                'status'       => $request->get('status'),
            ));


            if ($image == 1) {

                return redirect()->route('admin.image.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập image thành công');
            } else {

                return redirect()->route('admin.image.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        } else {

            // $validate = Validator::make(

            //     $request->all(),
            //     [
            //         'title'     => 'required',
            //         'content'   => 'required',

            //     ], [

            //         'title.required'     => 'Tiêu đề không được bỏ trống',
            //         'content.required'   => 'Nội dung không được bỏ trống'

            //     ]

            // );


            // if ($validate -> fails()) {

            //     return redirect()->route('admin.introduce.create')->withErrors($validate);

            // }


            $image = Image::where('id', $request->get('id'))->update(array(
                'catalogImage' => $request->get('catalogImage'),
                'status'       => $request->get('status'),
            ));



            if ($image == 1) {

                return redirect()->route('admin.image.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập image thành công');
            } else {

                return redirect()->route('admin.image.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table('image')->where('id', $request->get('id'))->delete();

        if ($delete == 1) {
            return redirect()->route('admin.image.show')->with('success', 'Xoá image thành công!');
        } else {
            return redirect()->route('admin.image.show')->with('error', 'Xoá image không thành công!');
        }
    }
}
