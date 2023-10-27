<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;

class ContactController extends Controller
{
    //

    public function edit()
    {
        $edit_contact = DB::table('contact')->get();

        return view('admin.contact.edit',
            ['edit_contact'=>$edit_contact[0]]
        );
    }

    public function update(Request $request)
    {
        if ($request->file('image') != '') {
            $path = public_path().'/uploads/Contact/images/';

            //upload new file
            $file     =    $request -> file('image');
            $filename =    $file    -> getClientOriginalName();
            $file -> move($path, $filename);


            $validate = Validator::make(

                $request->all(),
                [
                    'name'      => 'required',
                    'name_cty'  => 'required',
                    'address'   => 'required',
                    'email'     => 'required',
                    'hotline'   => 'required',

                ], [

                    'name.required'     => 'Tên website không được bỏ trống',
                    'name_cty.required' => 'Tên cty không được bỏ trống',
                    'address.required'  => 'Địa chỉ không được bỏ trống',
                    'email.required'    => 'Email không được bỏ trống',
                    'hotline.required'  => 'Hotline không được bỏ trống'

                ]

            );


            if ($validate -> fails()) {

                return redirect()->route('admin.contact.create')->withErrors($validate);

            }


            $contact = Contact::where('id', $request->get('id'))->update(array(
                'name'       => $request->get('name'),
                'name_cty'   => $request->get('name_cty'),
                'address'    => $request->get('address'),
                'email'      => $request->get('email'),
                'hotline'    => $request->get('hotline'),
                'image'      => $filename
            ));


            if ($contact == 1) {

                return redirect()->route('admin.contact.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập contact thành công');
            } else {

                return redirect()->route('admin.contact.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        } else {

            $validate = Validator::make(

                $request->all(),
                [
                    'name'      => 'required',
                    'name_cty'  => 'required',
                    'address'   => 'required',
                    'email'     => 'required',
                    'hotline'   => 'required',

                ], [

                    'name.required'     => 'Tên website không được bỏ trống',
                    'name_cty.required' => 'Tên cty không được bỏ trống',
                    'address.required'  => 'Địa chỉ không được bỏ trống',
                    'email.required'    => 'Email không được bỏ trống',
                    'hotline.required'  => 'Hotline không được bỏ trống'

                ]

            );


            if ($validate -> fails()) {

                return redirect()->route('admin.contact.create')->withErrors($validate);

            }


            $contact = Contact::where('id', $request->get('id'))->update(array(
                'name'       => $request->get('name'),
                'name_cty'   => $request->get('name_cty'),
                'address'    => $request->get('address'),
                'email'      => $request->get('email'),
                'hotline'    => $request->get('hotline')
            ));


            if ($contact == 1) {

                return redirect()->route('admin.contact.edit', ['id' => $request->get('id')])->with('success', 'Cập nhập contact thành công');
            } else {

                return redirect()->route('admin.contact.edit', ['id' => $request->get('id')])->with('error', 'Có lỗi xảy ra');
            }
        }
    }
}
