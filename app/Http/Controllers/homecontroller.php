<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\food;
use App\Models\FoodChef;
use App\Models\order;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homecontroller extends Controller
{
    public function index()
    {
        $food = food::all();
        $chefs = FoodChef::all();
        $user_id = Auth::id();
        $count = Cart::where('user_id',$user_id)->count();
        return view('home',compact('food','chefs','count'));
    }
    public function orderconfirm(Request $request)
    {
        foreach($request->foodname as $key =>$foodname)
        {
            $data = new order;
            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name[$key];
            $data->address = $request->address;
            $data->phone = $request->phone;
            $data->save();
        
        }
        return redirect()->back();
    }
    

    public function showcart(Request $request , $id)
    {
        $count = Cart::where('user_id',$id)->count();
        $data = Cart::where('user_id',$id)->join('food' , 'carts.food_id' , '=' , 'food.id')->get();
        $datauser = Cart::where('user_id',$id)->join('users' , 'carts.user_id' , '=' , 'users.id')->get();
        return view('showcart' , compact('count' , 'data' , 'datauser'));
    }
    public function userdeletcart($id)
    {
        $cart = Cart::where('food_id',$id);
        $cart->delete();
        return redirect()->back();
    }
    public function Addcart(Request $request , $id)
    {
       if(Auth::id())
       {
        $cart =  new Cart();
        $user_id = Auth::id();
        $cart->user_id = $user_id;
        $cart->food_id = $id;
        $cart->quantity = $request->quantity;
        $cart->save();
           return redirect()->back();
       }
       else
       {
           return redirect("/login");
       }
    }
    
    public function redirects()
    {
        $usertype = Auth::user()->usertype;
        if($usertype==1)
        {
            return view('admin.adminhome');
        }
        else
        {
            
            
        $food = food::all();
        $user_id = Auth::id();
        $chefs = FoodChef::all();
        $count = Cart::where('user_id',$user_id)->count();
        return view('home',compact('food','chefs','count'));
        }
    }
}
