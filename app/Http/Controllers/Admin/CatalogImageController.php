<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\CatalogImage;

class CatalogImageController extends Controller
{
    public function index()
    {
        $get_catalogImage = DB::table('catalogImage')->get();

        return view('admin.catalogImages.show',[
            'get_catalogImage' => $get_catalogImage
        ]);
    }

    public function create()
    {
        return view('admin.catalogImages.create');
    }

    public function addPost(Request $request)
    {
        // dd($request->all());
        if($request->file('image') != ''){
            $path = public_path().'/uploads/catalogImage/images/';

            //upload new file
            $file     =    $request -> file('image');
            $filename =    $file    -> getClientOriginalName();
            $file -> move($path, $filename);


            $validate = Validator::make(

                $request->all(),
                [
                    'title'     => 'required'

                ], [

                    'title.required'     => 'Tiêu đề không được bỏ trống'

                ]

            );



            if ($validate -> fails()) {

                return redirect()->route('admin.catalogImages.create')->withErrors($validate);

            }


            $event = new CatalogImage;

            $event -> title           = $request -> get('title');
            $event -> status          = $request -> get('status');
            $event -> image           = $filename;

            $event -> save();

            if ($event->wasRecentlyCreated == true) {


                return redirect()->route('admin.catalogImages.show')->with('success', 'Thêm thành công');

            }else{

                return redirect()->route('admin.catalogImages.create')->with('error','Có lỗi xảy ra');

            }

        }else{

            return redirect()->route('admin.catalogImages.create')->with('error','Xin vui lòng chọn ảnh');

        }
        return view('admin.catalogImages.create');
    }

    public function edit($id)
    {
        $edit_catalogImage = DB::table('catalogImage')->where([
            'id'=> $id
        ])->get();

        return view('admin.catalogImages.edit',
            ['edit_catalogImage'=>$edit_catalogImage[0]]
        );
    }

    public function update(Request $request)
    {
        if ($request->file('image') != '') {
            $path = public_path().'/uploads/CatalogImage/images/';

            //upload new file
            $file     =    $request -> file('image');
            $filename =    $file    -> getClientOriginalName();
            $file -> move($path, $filename);


            $validate = Validator::make(

                $request->all(),
                [
                    'title'     => 'required'
                ], [

                    'title.required'     => 'Tiêu đề không được bỏ trống'
                ]

            );


            if ($validate -> fails()) {

                return redirect()->route('admin.catalogImages.create')->withErrors($validate);

            }

            $event = CatalogImage::where('id', $request->get('id'))->update(array(
                'title'       => $request->get('title'),
                'image'       => $filename,
                'status'      => $request->get('status'),
            ));


            if ($event == 1) {

                return redirect()->route('admin.catalogImages.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập CatalogImage thành công');
            } else {

                return redirect()->route('admin.catalogImages.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        } else {

            $validate = Validator::make(

                $request->all(),
                [
                    'title'     => 'required'
                ], [

                    'title.required'     => 'Tiêu đề không được bỏ trống'
                ]

            );


            if ($validate -> fails()) {

                return redirect()->route('admin.catalogImages.create')->withErrors($validate);

            }

            $event = CatalogImage::where('id', $request->get('id'))->update(array(
                'title'       => $request->get('title'),
                'status'      => $request->get('status')
            ));


            if ($event == 1) {

                return redirect()->route('admin.catalogImages.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập CatalogImage thành công');
            } else {

                return redirect()->route('admin.catalogImages.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table('catalogImage')->where('id', $request->get('id'))->delete();

        if ($delete == 1) {
            return redirect()->route('admin.catalogImages.show')->with('success', 'Xoá CatalogImage thành công!');
        } else {
            return redirect()->route('admin.catalogImages.show')->with('error', 'Xoá CatalogImage không thành công!');
        }
    }
}
