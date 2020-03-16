<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();


class BrandController extends Controller
{
    public function add(){
      $this->AdminAuthCheck();
    	return view('admin.addbrand');
    }
    public function brand_store(Request $request){
        $this->AdminAuthCheck();
    	 $data = array();
         $this->validate($request, [
          'name' => 'required',
          'slug' => 'required',
          'status' => 'required'
        ]);
    	 $data['name'] =$request->name;
    	 $data['slug'] =$request->slug;

    	 DB::table('brands')->insert($data);
         Session::put('message','Add Information successfully');
    	 return Redirect()->back();
    }
    public function show_Brand(){
      $this->AdminAuthCheck();

         $all_brand_info = DB::table('brands')->get();
        $manage_brand = view('admin.showBrand')->
        with('brand_info',$all_brand_info);

        return view('admin.index')
        ->with('admin.showBrand',$manage_brand);
    
    }
    public function delete_brand($id){
      $this->AdminAuthCheck();
       DB::table('brands')
       ->where('id',$id)
       ->delete();

       Session::get('message','delete successfully!!!!!!!!!!');
       return Redirect::to('/show_brand');

    }
    public function edit_brand($id){
      $this->AdminAuthCheck();
      $brand_info =  DB::table('brands')
                ->where('id',$id)
                ->first();
    $update_brand = view('admin.edit_brand')
                    ->with('brand_info',$brand_info);
        return view('admin.index')
            ->with('admin.showBrand',$update_brand);

       //return view('admin.edit_brand');
    }

    public function update_brand(Request $request,$id){

      $data = array();
         $data['name'] =$request->name;
         $data['slug'] =$request->slug;

         DB::table('brands')->where('id',$id)->update($data);
         Session::put('message','Update Information successfully');
         return Redirect::to('/show_brand');  
    }

    public function AdminAuthCheck(){

    $admin_id=Session::get('admin_id');
    if($admin_id){
      return;
    }else{
      return Redirect::to('/admin')->send();
    }
  }
}
