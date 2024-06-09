<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;


class HomeController extends Controller
{
    public function index()
    {   
        // Cachowanie danych produktów
        $product = Cache::remember('products.all', now()->addHours(4), function () {
            return Product::all();
        });
    
        return view('home.userpage', compact('product'));
    }
    
    public function dashboard()
    {

        $usertype=Auth::user()->usertype;
        
        if($usertype=='1')
        {
            return view('admin.home');
        } 
        else 
        {
             // Cachowanie danych produktów, co 4h
            $product = Cache::remember('products.all', now()->addHours(4), function () {
                return Product::all();
            });
    
            return view('home.userpage', compact('product'));
        }
    }

        
    public function product_details($id)
    {
        //Cachowanie szczegółów produktu, co 4h
        $product = Cache::remember('product.details.'.$id, now()->addHours(4), function () use ($id) {
            return Product::find($id);
        });
    
        return view('home.product_details', compact('product'));
    }

    public function add_cart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user=Auth::user();

            $product=product::find($id);

            $cart=new cart;

            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;

            $cart->product_title=$product->title;

            if($product->discount_price != null)
            {
                $cart->price=$product->discount_price * $request->ilość;
            }
            else
            {
                $cart->price=$product->price * $request->ilość;
            }
            
            $cart->image=$product->image;
            $cart->Product_id=$product->id;
            $cart->quantity=$request->ilość;

            $cart->save();

            return redirect()->back();
            
        }

        else
        {
            return redirect('login');
        }
    }

    public function show_cart()
    {
        if(Auth::id())
        {
            $id=Auth::user()->id;
        $cart=cart::where('user_id', '=', $id)->get();
        return view('home.showcart', compact('cart'));
        }
        else
        {
            return redirect('login');
        }
       
    }

    public function remove_cart($id)
    {
        $cart=cart::find($id);
        $cart->delete();

        return redirect()->back();
    }

    public function cash_order()
    {
        $user=Auth::user();

        $userid=$user->id;

        $data=cart::where('user_id', '=', $userid)->get();

        foreach($data as $data)
        {
            $order=new order;

            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;
            $order->product_title=$data->product_title;
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->product_id=$data->Product_id;

            $order->payment_status='płatność za pobraniem';
            $order->delivery_status='w trakcie realizacji';

            $order->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();
        }

        return redirect()->back()->with('message', 'Otrzymaliśmy Twoje zamówienie.');
    }

    public function payment_unavailable()
    {
        return view('home.payment_unavailable');
    }

    public function about()
    {
        return view('home.about');
    }

}
