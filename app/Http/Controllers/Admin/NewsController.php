<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $get_news = DB::table('news')->get();

        return view('admin.news.show',[
            'get_news' => $get_news
        ]);
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function addPost(Request $request)
    {
        // dd($request->all());
        if($request->file('image') != ''){
            $path = public_path().'/uploads/News/images/';

            //upload new file
            $file     =    $request -> file('image');
            $filename =    $file    -> getClientOriginalName();
            $file -> move($path, $filename);


            $validate = Validator::make(

                $request->all(),
                [
                    'title'         => 'required',
                    'content'       => 'required',
                    'slug'          => 'required',
                    'description'   => 'required',

                ], [

                    'title.required'         => 'Tiêu đề không được bỏ trống',
                    'content.required'       => 'Nội dung không được bỏ trống',
                    'slug.required'          => 'Slug không được bỏ trống',
                    'description.required'   => 'Chi tiết không được bỏ trống'

                ]

            );



            if ($validate -> fails()) {

                return redirect()->route('admin.news.create')->withErrors($validate);

            }

            $news = new News;

            $news -> title           = $request     -> get('title');
            $news -> content         = strip_tags($request -> get('content'));
            $news -> slug            = $request     -> get('slug');
            $news -> description     = $request     -> get('description');
            $news -> status          = $request     -> get('status');
            $news -> image           = $filename;

            $news -> save();

            if ($news->wasRecentlyCreated == true) {


                return redirect()->route('admin.news.show')->with('success', 'Thêm thành công');

            }else{

                return redirect()->route('admin.news.create')->with('error','Có lỗi xảy ra');

            }

        }else{

            return redirect()->route('admin.news.create')->with('error','Xin vui lòng chọn ảnh');

        }
        return view('admin.news.create');
    }

    public function edit($id)
    {
        $edit_news = DB::table('news')->where([
            'id'=> $id
        ])->get();

        return view('admin.news.edit',
            ['edit_news'=>$edit_news[0]]
        );
    }

    public function update(Request $request)
    {
        if ($request->file('image') != '') {
            $path = public_path().'/uploads/News/images/';

            //upload new file
            $file     =    $request -> file('image');
            $filename =    $file    -> getClientOriginalName();
            $file -> move($path, $filename);


            $validate = Validator::make(

                $request->all(),
                [
                    'title'         => 'required',
                    'content'       => 'required',
                    'slug'          => 'required',
                    'description'   => 'required',

                ], [

                    'title.required'         => 'Tiêu đề không được bỏ trống',
                    'content.required'       => 'Nội dung không được bỏ trống',
                    'slug.required'          => 'Slug không được bỏ trống',
                    'description.required'   => 'Chi tiết không được bỏ trống'

                ]

            );



            if ($validate -> fails()) {

                return redirect()->route('admin.news.create')->withErrors($validate);

            }

            $news = News::where('id', $request->get('id'))->update(array(
                'title'       => $request->get('title'),
                'content'     => strip_tags($request->get('content')),
                'slug'        => $request->get('slug'),
                'description' => $request->get('description'),
                'image'       => $filename,
                'status'      => $request->get('status'),
            ));


            if ($news == 1) {

                return redirect()->route('admin.news.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập news thành công');
            } else {

                return redirect()->route('admin.news.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        } else {

            $validate = Validator::make(

                $request->all(),
                [
                    'title'         => 'required',
                    'content'       => 'required',
                    'slug'          => 'required',
                    'description'   => 'required',

                ], [

                    'title.required'         => 'Tiêu đề không được bỏ trống',
                    'content.required'       => 'Nội dung không được bỏ trống',
                    'slug.required'          => 'Slug không được bỏ trống',
                    'description.required'   => 'Chi tiết không được bỏ trống'

                ]

            );



            if ($validate -> fails()) {

                return redirect()->route('admin.introduce.create')->withErrors($validate);

            }


            $news = News::where('id', $request->get('id'))->update(array(
                'title'       => $request->get('title'),
                'content'     => strip_tags($request->get('content')),
                'slug'        => $request->get('slug'),
                'description' => $request->get('description'),
                'status'      => $request->get('status'),
            ));


            if ($news == 1) {

                return redirect()->route('admin.news.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập news thành công');
            } else {

                return redirect()->route('admin.news.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table('news')->where('id', $request->get('id'))->delete();

        if ($delete == 1) {
            return redirect()->route('admin.news.show')->with('success', 'Xoá news thành công!');
        } else {
            return redirect()->route('admin.news.show')->with('error', 'Xoá news không thành công!');
        }
    }
}
