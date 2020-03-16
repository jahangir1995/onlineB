<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orderproduct;

class OrderController extends Controller
{
    public function ShowOrder()
    {	
    	$order=Orderproduct::all();
    	return view('admin.order',compact('order'));
    }
    public function orderview()
    {	
    	return view('admin.orderview');
    }
}
