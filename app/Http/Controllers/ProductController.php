<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\Product;
use Session;
session_start();

class ProductController extends Controller
{
    public function addporduct(){
      $this->AdminAuthCheck();
    	return view('admin.addproduct');
    }


    public function product_store(Request $request)
    {
      $this->AdminAuthCheck();
      $validateData = $request->validate([
            'category_name'=>'required',
            'brand_name'=>'required',
            'price'=>'required',
            'image'=>'required'
        ]);
        if ($request->hasfile('image') ) {

        //return $request->image->getClientOriginalName();
        $imageName=$request->image->store('public');
      }
        
        $data = new product;
        $data->category_id =$request->category_name;
        $data->brand_id =$request->brand_name;
        $data->title =$request->productname; 
        $data->description =$request->description;
        $data->image =$imageName;
        $data->slug =$request->slug;
        $data->quentity =$request->quentity;
        $data->status =$request->status;
        $data->price =$request->price;
        $data->admin_id =$request->admin_id;

         $data->save();
         Session::put('message','Add Information successfully');
         return redirect()->back();

    }


    public function show_product(){
      $this->AdminAuthCheck();
        $all_product_info = DB::table('products')->get();
        $manage_product = view('admin.showproduct')->
        with('product_info',$all_product_info);

        return view('admin.index')
        ->with('admin.showproduct',$manage_product);
        //return view('admin.showproduct');
    }


    public function unactive_product($id){
      //echo $id;
      DB::table('products')
      ->where('id',$id)
      ->update(['status'=>0]);
      return Redirect::to('/show-product');

        }
      public function active_product($id){
      //echo $id;
      DB::table('products')
      ->where('id',$id)
      ->update(['status'=>1]);
      return Redirect::to('/show-product');

      }

      
      // public function save_product_image(Request $request){
      //   $this->AdminAuthCheck();
      // $validatedData = $request->validate([
        
      //        'image' => 'required | mimes:jpeg,jpg,png,PNG | max:1000',
      //    ]);
      // $data=array();
    
      // $data['product_id']=$request->product_id;
      // $image=$request->file('image');
      // if ($image) {
      //   $image_name=hexdec(uniqid());
      //       $ext=strtolower($image->getClientOriginalExtension());
      //       $image_full_name=$image_name.'.'.$ext;
      //       $upload_path='public/online/images/';
      //       $image_url=$upload_path.$image_full_name;
      //       $success=$image->move($upload_path,$image_full_name);
      //       $data['image']=$image_url;
      //       DB::table('productimage')->insert($data);
      //        $notification=array(
      //           'message'=>'Successfully Post Inserted',
      //           'alert-type'=>'success'
      //            );
      //        return Redirect()->back()->with($notification);
      // }else{
      //    DB::table('productimage')->insert($data);
      //    $notification=array(
      //           'message'=>'Successfully Post Inserted',
      //           'alert-type'=>'success'
      //            );
      //        return Redirect()->back()->with($notification);
      // }

      // }
      public function delete_product($id){
    $this->AdminAuthCheck();
    
    DB::table('products')
    ->where('id',$id)
    ->delete();

    Session::get('message','delete successfully!!!!!!!!!!');
    return Redirect::to('/show_category');
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
