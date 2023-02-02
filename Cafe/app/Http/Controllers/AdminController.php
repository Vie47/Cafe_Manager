<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Drink;
use App\Models\Reservation;
use App\Models\Drinkchef;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public  function user(){
        $data=user::all();
        return view("admin.users",compact("data"));
    }

    public  function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();

    }
    public  function deletemenu($id){
        $data=drink::find($id);
        $data->delete();
        return redirect()->back();

    }


    public function drinkmenu(){
        $data=drink::all();
        return view("admin.drinkmenu",compact("data"));
    }
    public  function updateview($id){
        $data=drink::find($id);
        return view("admin.updateview",compact("data"));

    }
    public function update(Request $request, $id)
    {
        $data=drink::find($id);

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('drinkimage',$imagename);
        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }


    public function upload(Request $request){
        $data = new drink;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
                    $request->image->move('drinkimage',$imagename);
                    $data->image=$imagename;

                    $data->title=$request->title;
                    $data->price=$request->price;
                    $data->description=$request->description;
                    $data->save();
                    return redirect()->back();


    }

    public function reservation(Request $request)
    {
        $data=new reservation;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->masage=$request->masage;
        $data->save();
        return redirect()->back();
    }

    public  function viewreservation(){
        if(Auth::id()){

        $data=reservation::all();
        return view("admin.adminreservation",compact("data"));
    }else{
            return redirect('login');
        }
    }

    public function viewchef(){
        $data=drinkchef::all();
        return view("admin.adminchef",compact("data"));
    }

    public function uploadchef( Request $request){

        $data=new drinkchef;
        $image=$request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image=$imagename;

        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();

        return redirect()->back();

    }

    public function updatechef($id){
        $data=drinkchef::find($id);
        return view("admin.updatechef",compact("data"));

    }
    public function updatedrinkchef(Request $request,$id){
        $data=drinkchef::find($id);

        $image=$request->image;
     if($image){
         $imagename = time().'.'.$image->getClientOriginalExtension();
         $request->image->move('chefimage',$imagename);
         $data->image=$imagename;
     }

        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();

        return redirect()->back();
    }

    public  function deletechef($id){
        $data=drinkchef::find($id);
        $data->delete();
        return redirect()->back();

    }
    public  function orders(){
        $data=order::all();

        return view('admin.orders',compact('data'));
    }
}
