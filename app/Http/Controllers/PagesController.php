<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;

class PagesController extends Controller
{
    public function index(){

        $data=[];
        $data['product_publish'] = Product::orderBy('title', 'ASC')->paginate(8);
        $data['shoes'] = Product::orderBy('id', 'desc')
        ->where('title', 'like', '%Shoes%')
        ->orWhere('description', 'like', '%Shoes%')
        ->paginate(2);
        $data['mostwanted'] = Product::orderBy('id', 'ASC')->paginate(2);
        $data['scarfs'] = Product::paginate(2);
        $data['onsell'] = Product::paginate(2);
        $data['feature'] = Product::all();
        //return $product_publish;
        return view('layout',$data);

    }

    public function show_product_by_category($id){
        $product_by_category = DB::table('products')
        ->join('categories','products.category_id','=','categories.id')
        ->select('products.*','categories.name')
        ->where('categories.id',$id)
        ->get();

        $manage_by_category = view('category_by_product')
        ->with('publish_product',$product_by_category);
        return view('index')->with('category_by_product',$manage_by_category);
    }

    public function details_product($id){

        $product_details_id = DB::table('products')
        ->join('categories','products.category_id','=','categories.id')
        ->select('products.*','categories.name')
        ->where('products.id',$id)
        ->first();

        $manage_product_id = view('detailsProduct')
        ->with('publish_product_details',$product_details_id);
        return view('index')->with('detailsProduct',$manage_product_id);

        //return view('detailsProduct');
    }
    public function show_product_by_brand($id){
        $product_by_brands = DB::table('products')
        ->join('brands','products.brand_id','=','brands.id')
        ->select('products.*','brands.name')
        ->where('brands.id',$id)
        ->get();
        
        return view('brand_by_product',compact('product_by_brands'));
    }
    public function search(Request $request)
    {
        $this->validate($request, [
            'search' => 'required'
        ]);
        $search_txt = $request->search;

        $search_products = Product::orderBy('id', 'desc')
        ->where('title', 'like', '%'.$search_txt.'%')
        ->orWhere('description', 'like', '%'.$search_txt.'%')
        ->get();

        return view('search',compact('search_products'));
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
}
