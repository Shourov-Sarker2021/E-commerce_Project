<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SessionController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('pages.productlist',compact('products'));
    }

    public function cart(){
        return view('pages.cart');
    }
    public function addToCart($id){
        $product=Product::findOrFail($id);
        $cart=session()->get('cart',[]);

        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }
        else{
            $cart[$id]=[
                "name"=>$product->name,
                "quantity"=>1,
                "price"=>$product->price,
                "image"=>$product->image
            ];
        }
        session()->put('cart',$cart);
        return redirect()->back()->with(
            'success',"Product Added to Cart Successfully"
        );

    }

        public function update(Request $request){
            if($request->id && $request->quantity){
                $cart=session()->get('cart');
                $cart[$request->id]['quantity']=$request->quantity;
                session()->put('cart',$cart);
                session()->flash('success',"Cart Updated Successfully");
            }

        }

        public function cartUpdate(Request $request){
            if($request->id && $request->quantity){
                $cart=session()->get('cart');
                $cart[$request->id]['quantity']=$request->quantity;
                session()->put('cart',$cart);
                session()->flash('success','Cart updated successfully!');
            }
        }

        public function remove(Request $request){
            if($request->id){
                $cart=session()->get('cart');
                if(isset($cart[$request->id])){
                    unset($cart[$request->id]);
                    session()->put('cart',$cart);
                }
                session()->flash('success',"Product Remove Successfully");
            }
         
        }

}
