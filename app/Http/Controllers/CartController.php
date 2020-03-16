<?php
namespace App\Http\Controllers;

use App\Product;
use DB;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart()
    {
        $product_show = Cart::content();
        return view('addcart', compact('product_show'));
    }

    public function addToCart(Request $request)
    {
        $id      = $request->product_id;
        $product = Product::where('id', $id)->first();

        $data = array();
        if ($product->offer_price == null) {

            $data['id']               = $product->id;
            $data['name']             = $product->title;
            $data['qty']              = 1;
            $data['price']            = $product->price;
            $data['weight']           = 1;
            $data['options']['image'] = $product->image;
            Cart::add($data);
            return redirect()->route('cart.show');

        } else {
            $data['id']               = $product->id;
            $data['name']             = $product->title;
            $data['qty']              = 1;
            $data['price']            = $product->offer_price;
            $data['weight']           = 1;
            $data['options']['image'] = $product->image;
            Cart::add($data);
            return redirect()->route('cart.show');
        }
    }
    public function cartRemove(Request $request)
    {
        $rowID = $request->rowID;
        Cart::remove($rowID);
        return back();

    }

    public function checkout(Request $request)
    {
        return view('pages.checkout');
    }
    public function order(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'contact'       => 'required',
            'accountnumber' => 'required',
            'transication'  => 'required',
        ]);

        $shipingaddress['name']          = $request->name;
        $shipingaddress['contact']       = $request->contact;
        $shipingaddress['address']       = $request->address;
        $shipingaddress['paymentoption'] = $request->paymentoption;
        $shipingaddress['accountnumber'] = $request->accountnumber;
        $shipingaddress['transication']  = $request->transication;

        $shiping_id = DB::table('shiping_addresses')->insertGetId($shipingaddress);

        $products    = Cart::content();
        $productinfo = [];

        $i = 0;
        if (!blank($products)) {
            foreach ($products as $product) {
                // dump($product);
                $productinfo[$i]['product_id']  = $product->id;
                $productinfo[$i]['quentity']    = $product->qty;
                $productinfo[$i]['subtotal']    = $product->subtotal;
                $productinfo[$i]['shipping_id'] = $shiping_id;
                $i++;

            }
        }
        DB::table('orderproducts')->insert($productinfo);
        Cart::destroy();
        return view('pages.order_confirm_message');

    }

}
