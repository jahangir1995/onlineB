<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use Session;

session_start();

class ImageSliderController extends Controller
{
    public function index()
    {
        return view('admin.addslider');
    }

    public function store(Request $request)
    {
        $this->AdminAuthCheck();
        $validatedData = $request->validate([

            'image' => 'required | mimes:jpeg,jpg,png,PNG',
        ]);
        $data = array();

        $data['status'] = $request->status;
        $image          = $request->file('image');
        if ($image) {
            $image_name      = hexdec(uniqid());
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/online/images/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $data['image']   = $image_url;
            DB::table('image_sliders')->insert($data);
            $notification = array(
                'message'    => 'Successfully Post Inserted',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        } else {
            DB::table('image_sliders')->insert($data);
            $notification = array(
                'message'    => 'Successfully Post Inserted',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        }
    }
    public function show_slider()
    {
        $this->AdminAuthCheck();
        $all_Slider    = DB::table('image_sliders')->get();
        $manage_slider = view('admin.showSlider')->
            with('slider_info', $all_Slider);

        return view('admin.index')
            ->with('admin.showSlider', $manage_slider);
    }
    public function delete_slider($id)
    {
        //echo $id;
        $this->AdminAuthCheck();
        DB::table('image_sliders')
            ->where('id', $id)
            ->delete();

        Session::get('message', 'delete successfully!!!!!!!!!!');
        return Redirect::to('/show_slider');
    }
    public function unactive_slider($id)
    {
        //echo $id;
        DB::table('image_sliders')
            ->where('id', $id)
            ->update(['status' => 0]);
        return Redirect::to('/show_slider');

    }
    public function active_slider($id)
    {

        DB::table('image_sliders')
            ->where('id', $id)
            ->update(['status' => 1]);
        return Redirect::to('/show_slider');

    }
    public function AdminAuthCheck()
    {

        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return;
        } else {
            return Redirect::to('/admin')->send();
        }
    }

}
