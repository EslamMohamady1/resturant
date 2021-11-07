<?php

namespace App\Http\Controllers;

use App\Models\food;
use App\Models\FoodChef;
use App\Models\order;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function Allusers()
    {
        $data = User::all();
        return view('admin.Allusers',compact('data'));
    }
    public function showorders()
    {
        $data = order::all();
        return view('admin.showorders' , compact('data'));
    }
    public function adminsearch(Request $request)
    {
        $search=$request->search;
        $data = order::where('foodname','like','%'.$search.'%')
        ->orwhere('name','like','%'.$search.'%')
        ->orwhere('price','like','%'.$search.'%')
        ->orwhere('quantity','like','%'.$search.'%')
        
        ->get();
        return view('admin.showorders' , compact('data'));
    }
    public function adminupdatechef(Request $request,$id)
    {
        $chef = FoodChef::find($id);
        $image = $request->chefimage;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('ChefImageFolder',$imagename);
        $chef->name = $request->name;
        $chef->speciality = $request->speciality;
        $chef->image = $imagename;
        $chef->save();
        return redirect()->back();
    }
    public function updatechef($id)
    {
        $data =  FoodChef::find($id);
       return view('admin.adminupdatechef',compact('data'));
    }
    public function deletchef($id)
    {
        $chef = FoodChef::find($id);
        $chef->delete();
        return redirect()->back();
    }
    public function adminaddchefs()
    {
        $showchefs = FoodChef::all();
        return view('admin.adminaddchefs',compact('showchefs'));
    }
    public function adminaddnewchef(Request $request)
    {
        $chef = new FoodChef();
        $image = $request->chefimage;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $image->move('ChefImageFolder',$imagename);
        $chef->image = $imagename;
        $chef->name = $request->name;
        $chef->speciality = $request->speciality;
        $chef->save();
        return redirect()->back();
    }
    public function adminupdatefood(Request $request , $id)
    {
        $food =  food::find($id);
        $image = $request->FoodImage;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->FoodImage->move('FoodImagefolder',$imagename);
        $food->title = $request->Title;
        $food->price = $request->Price;
        $food->image = $imagename;
        $food->description = $request->Descreption;
        $food->save();

        return redirect()->back();
    }
    public function showreservation()
    {
        $showreservation = Reservation::all();
        return view('admin.showreservation',compact('showreservation'));
    }
    public function makeorder(Request $request)
    {
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->guest = $request->numberguest;
        $reservation->message = $request->message;
        $reservation->save();
        return redirect()->back();
    }
    public function updatefood($id)
    {
        $data = food::find($id);
        return view('admin.updatefood',compact('data'));
    }
    public function deletfood($id)
    {
        $food = food::find($id);
        $food->delete();
        return redirect()->back();
    }
    public function deletuser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
    public function foodmenu()
    {
        $food = food::all();
        return view('admin.food_menu',compact('food'));
    }
    public function AddFood(Request $request)
    {
        $food = new food();
        $image = $request->FoodImage;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->FoodImage->move('FoodImagefolder',$imagename);
        $food->title = $request->Title;
        $food->price = $request->Price;
        $food->image = $imagename;
        $food->description = $request->Descreption;
        $food->save();

        return redirect()->back();
    }
}
