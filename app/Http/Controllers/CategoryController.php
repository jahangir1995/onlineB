<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
use App\Category;
session_start();


use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function add(){
    $this->AdminAuthCheck();
    return view('admin.addcategory');
  }

  public function category_store(Request $request){

    $this->AdminAuthCheck();
    $this->validate($request, [
      'name' => 'required',
      'slug' => 'required',
      'status' => 'required'
    ]);
    $data=array();
    $data['name']=$request->name;
    $data['slug']=$request->slug;

    DB::table('categories')->insert($data);
    Session::put('message','Add Information successfully');
    return Redirect()->back();
  }

  public function show_category(){

    $this->AdminAuthCheck();
    $all_category_info = DB::table('categories')->get();
    $manage_category = view('admin.showCategory')->
    with('category_info',$all_category_info);

    return view('admin.index')
    ->with('admin.showCategory',$manage_category);
  }
  public function edit_category($id){
    $this->AdminAuthCheck();
    $category_info =  DB::table('categories')
    ->where('id',$id)
    ->first();
    $update_category = view('admin.edit_category')
    ->with('category_info',$category_info);
    return view('admin.index')
    ->with('admin.showCategory',$update_category);

       //return view('admin.edit_category');
  }
  public function update_category(Request $request,$id){
    $this->AdminAuthCheck();
    $data=array();
    $data['name']=$request->name;
    $data['slug']=$request->slug;

    DB::table('categories')->where('id',$id)->update($data);
    Session::put('message','update Information successfully');
    return Redirect::to('/show_category');
  }


  public function delete_category($id){
    $this->AdminAuthCheck();
    DB::table('categories')
    ->where('id',$id)
    ->delete();

    Session::get('message','delete successfully!!!!!!!!!!');
    return Redirect::to('/show_category');
  }
  public function active_cat($id){
      
        Category::where('id',$id)
      ->update(['status'=>1]);
      return Redirect::to('/show_category');
    }
     public function unactive_cat($id){
      
        Category::where('id',$id)
      ->update(['status'=>0]);
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
