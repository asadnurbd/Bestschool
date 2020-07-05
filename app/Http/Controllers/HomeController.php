<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\school_info;
use \App\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //showing user location map?


    //////////profile.blade.php/////////////////
     public function index()
     {
       $user =  \App\user::pluck('area');
       $location = \App\location_code::whereIn('loc_name',$user)->get();
       $school_info=school_info::all();
       return view('home',compact('location','school_info'));
     }


     public function profile_update(Request $request ,$id)
     {


            // $validatedData = $request->validate([
            //
            //  'school_name' => ['required', 'string', 'max:255'],
            //  's_address' => ['required', 'string', 'max:255'],
            //  'email' => ['required', 'string', 'email', 'max:255'],
            //  'phone' => ['required', 'max:255'],
            //  'cost' => 'required',
            //  'type' => 'required',
            //  'area' => 'required',
            //  'image' => 'required',' mimes:jpeg,jpg,png | max:1000',
            //  'longi' => ['required', 'max:255'],
            //  'lati' => ['required', 'max:255'],
            //
            //
            //        ]);
             $id=User::find($id);
             $id->name=$request->name;
             $id->address=$request->address;
             $id->area=$request->area;
             $id->occupation=$request->occupation;
             $id->about=$request->about;
             $id->email=$request->email;
             $id->phone=$request->phone;




             if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/rev/admin/school_img/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $id->image=$image_url;
                 //
               $id->save();

                }


                $id->save();
                $notification=array(
                      'messege'=>'Successfully school information  Inserted',
                      'alert-type'=>'success'
                       );
                     return Redirect()->route('home')->with($notification);


     }



     public function  school_search(Request $request){

        $search_text=$request->search;

        if ($search_text!="") {
          $school_info=school_info::orderBy('school_id','desc')
          ->where('school_name','like','%'.$search_text.'%')
          ->orwhere('s_address','like','%'.$search_text.'%')
           ->get();
           if(count($school_info)>0){
             return view('searchschool',compact('school_info'));

           }
          }
              return view('warning',compact('search_text'));
    }


}
