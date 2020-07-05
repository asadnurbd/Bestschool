<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\school_info;
use App\User;
use App\school_post;
use App\post_comment;
use App\comment;

use DB;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
      /////////////////////////////admin main page//////////////////////////////////
    public function index()
    {
        return view('admin');
    }

    ///////////////////////schoolinfo/////////////////////////////

    public function school_info(){


          return view('admin.newschool');
      }

    public function store_school_info(Request  $request)
     {

             $validatedData = $request->validate([

              'school_name' => ['required', 'string', 'max:255'],
              's_address' => ['required', 'string', 'max:255'],
              'email' => ['required', 'string', 'email', 'max:255'],
              'phone' => ['required', 'max:255'],
              'cost' => 'required',
              'image' => 'required',' mimes:jpeg,jpg,png | max:1000',
              'longi' => ['required', 'max:255'],
              'lati' => ['required', 'max:255'],

          ]);

          $school= new school_info;
          $school->school_name=$request->school_name;
          $school->s_address=$request->s_address;
          $school->area=$request->area;
          $school->website=$request->website;
          $school->type=$request->type;
          $school->totalStudent=$request->totalStudent;
          $school->classRange=$request->classRange;
          $school->email=$request->email;
          $school->phone=$request->phone;
          $school->cost=$request->cost;
          $school->longi=$request->longi;
          $school->lati=$request->lati;
          $school->rating=$request->rating;
          $school->available=$request->available;


          if ($request->hasFile('image')) {
             $image = $request->file('image');
             $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name.'.'.$ext;
             $upload_path='public/rev/admin/school_img/';
             $image_url=$upload_path.$image_full_name;
             $success=$image->move($upload_path,$image_full_name);
             $school->image=$image_url;
              //
            $school->save();

             }

           if ($request->hasFile('feeStructureImg')) {
              $image2 = $request->file('feeStructureImg');
              $image2_name=hexdec(uniqid());
              $ext2=strtolower($image2->getClientOriginalExtension());
              $image2_full_name=$image2_name.'.'.$ext2;
              $upload2_path='public/rev/admin/school_img/';
              $image2_url=$upload2_path.$image2_full_name;
              $success2=$image2->move($upload2_path,$image2_full_name);
              $school->feeStructureImg=$image2_url;
               //
             $school->save();

              }
            $school->save();
            $notification=array(
                  'messege'=>'Successfully school information  Inserted',
                  'alert-type'=>'success'
                   );
                 return Redirect()->route('admin.editschool')->with($notification);
  }


  /////////////////////////////////////editschool/////////////////////

    public function editschool()
     {
        // $editschool=school_info::all();
        $editschool=school_info::orderBy('school_id','desc')->paginate(8);

        return view('admin.editschool',compact('editschool'));
    }



      public function  school_search(Request $request){

         $search_text=$request->search;
         $editschool=school_info::orderBy('school_id','desc')
         ->where('school_name','like','%'.$search_text.'%')
         ->orwhere('s_address','like','%'.$search_text.'%')
         ->orwhere('email','like','%'.$search_text.'%')
         ->orwhere('phone','like','%'.$search_text.'%')
          ->paginate(8);
       // return response()->json($editschool);
        return view('admin.editschool',compact('editschool'));
     }

    public function delete_school($school_id){

      school_info::where('school_id',$school_id)->delete();
      $notification=array(
            'messege'=>'Successfully school destroy',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
      }


    public function edit_school($school_id)
    {
         $id=school_info::where('school_id',$school_id)->get();
          // return response()->json( $id);
         return view('admin.update_school',compact('id'));
    }

    public function update_school(Request $request ,$school_id)
    {

         $validatedData = $request->validate([

          'school_name' => ['required', 'string', 'max:255'],
          's_address' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255'],
          'phone' => ['required', 'max:255'],
          'cost' => 'required',
          'type' => 'required',
          'area' => 'required',
          'image' => 'required',' mimes:jpeg,jpg,png | max:1000',
          'longi' => ['required', 'max:255'],
          'lati' => ['required', 'max:255'],


                ]);
          $id=school_info::find($school_id);
          $id->school_name=$request->school_name;
          $id->s_address=$request->s_address;
          $id->area=$request->area;
          $id->website=$request->website;
          $id->type=$request->type;
          $id->totalStudent=$request->totalStudent;
          $id->classRange=$request->classRange;
          $id->email=$request->email;
          $id->phone=$request->phone;
          $id->cost=$request->cost;
          $id->longi=$request->longi;
          $id->lati=$request->lati;
          $id->rating=$request->rating;
          $id->available=$request->available;


          if ($request->hasFile('image')) {
             $image = $request->file('image');
             $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name.'.'.$ext;
             $upload_path='public/rev/admin/school_img/';
             $image_url=$upload_path.$image_full_name;
             $success=$image->move($upload_path,$image_full_name);
             $id->image=$image_url;

             }

            if ($request->hasFile('feeStructureImg')) {
               $image2 = $request->file('feeStructureImg');
               $image2_name=hexdec(uniqid());
               $ext2=strtolower($image2->getClientOriginalExtension());
               $image2_full_name=$image2_name.'.'.$ext2;
               $upload2_path='public/rev/admin/school_img/';
               $image2_url=$upload2_path.$image2_full_name;
               $success2=$image2->move($upload2_path,$image2_full_name);
               $id->feeStructureImg=$image2_url;


               }
             $id->save();
             $notification=array(
                   'messege'=>'Successfully school information  Inserted',
                   'alert-type'=>'success'
                    );
                  return Redirect()->route('admin.editschool')->with($notification);
    }
////////////////////useredit///////////////////////



public function edituser()
{
    $edituser=User::orderBy('id','desc')->paginate(8);

    return view('admin.edituser',compact('edituser'));
}



public function  user_search(Request $request){

   $search_text=$request->search;
     $edituser=User::orderBy('id','desc')
     ->where('name','like','%'.$search_text.'%')
     ->orwhere('address','like','%'.$search_text.'%')
     ->orwhere('email','like','%'.$search_text.'%')
      ->paginate(4);

  // return response()->json($edituser);
  return view('admin.edituser',compact('edituser'));
}




public function delete_user($user_id){

  User::where('id',$user_id)->delete();
  $notification=array(
        'messege'=>'Successfully User destroy',
        'alert-type'=>'success'
         );
       return Redirect()->route("admin.edituser")->with($notification);


  }

////////////////school _post//////////////////////////////


  public function editpost()
   {
      // $editschool=school_info::all();
      $editpost=school_post::orderBy('id','desc')->paginate(8);

      return view('admin.editpost',compact('editpost'));
  }

    public function  post_search(Request $request){

       $search_text=$request->search;
       $editpost=school_post::orderBy('id','desc')
       ->where('title','like','%'.$search_text.'%')
       ->orwhere('body','like','%'.$search_text.'%')
        ->paginate(8);

     // return response()->json($editschool);
      return view('admin.editpost',compact('editpost'));
   }

  public function delete_post($post_id){

    school_post::where('id',$post_id)->delete();
    $notification=array(
          'messege'=>'Successfully school post destroy',
          'alert-type'=>'success'
           );
         return Redirect()->back()->with($notification);
    }


  public function edit_post($post_id)
  {
       $id=school_post::where('id',$post_id)->get();
        // return response()->json( $id);
       return view('admin.update_post',compact('id'));
  }

  public function update_post(Request $request ,$post_id)
  {
      // return response()->json(  $request);

       $validatedData = $request->validate([

        'title' => ['required', 'string', 'max:255'],
        'body' => ['required', 'string', 'max:255'],
        'image' => 'required',



              ]);
        $id=school_post::find($post_id);
        $id->title=$request->title;
        $id->body=$request->body;
        $id->status=$request->status;
        $id->is_approved=$request->is_approved;



        if ($request->hasFile('image')) {
           $image = $request->file('image');
           $image_name=hexdec(uniqid());
           $ext=strtolower($image->getClientOriginalExtension());
           $image_full_name=$image_name.'.'.$ext;
           $upload_path='public/rev/admin/school_img/';
           $image_url=$upload_path.$image_full_name;
           $success=$image->move($upload_path,$image_full_name);
           $id->image=$image_url;

           }

           $id->save();
           $notification=array(
                 'messege'=>'Successfully school information  Inserted',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('admin.editschool')->with($notification);

  }


/////////////////////////////////////admin comments///////////////////
public function editcomment()
 {
    // $editschool=school_info::all();
    $editcomment=comment::orderBy('comment_id','desc')->paginate(8);

    return view('admin.editcomment',compact('editcomment'));
}


public function  comment_search(Request $request){

   $search_text=$request->search;
   $editcomment=comment::orderBy('comment_id','desc')
   ->where('comment','like','%'.$search_text.'%')
    ->paginate(8);

 // return response()->json($editschool);
  return view('admin.editcomment',compact('editcomment'));
}


public function delete_comment($comment_id){

  comment::where('comment_id',$comment_id)->delete();
  $notification=array(
        'messege'=>'Successfully comment destroy',
        'alert-type'=>'success'
         );
       return Redirect()->back()->with($notification);
  }


  public function edit_comment($comment_id)
  {
       $id=comment::where('comment_id',$comment_id)->get();
        // return response()->json( $id);
       return view('admin.update_comment',compact('id'));
  }

  public function update_comment(Request $request ,$comment_id)
  {
      // return response()->json(  $request);

       $validatedData = $request->validate([

        'comment' => ['required', 'string',],



              ]);
        $id=comment::find($comment_id);
        $id->comment=$request->comment;



           $id->save();
           $notification=array(
                 'messege'=>'Successfully school information  Inserted',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('admin.editcomment')->with($notification);

  }


  ////////////////////////////////////admin post comments///////////////////
  public function editpostcomment()
   {
      // $editschool=school_info::all();
      $editpostcomment=post_comment::orderBy('id','desc')->paginate(8);

      return view('admin.editpostcomment',compact('editpostcomment'));
  }


  public function  postcomment_search(Request $request){

     $search_text=$request->search;
     $editpostcomment=post_comment::orderBy('id','desc')
     ->where('comment','like','%'.$search_text.'%')
      ->paginate(8);

   // return response()->json($editschool);
    return view('admin.editpostcomment',compact('editpostcomment'));
  }


  public function delete_postcomment($id){

    post_comment::where('id',$id)->delete();
    $notification=array(
          'messege'=>'Successfully comment destroy',
          'alert-type'=>'success'
           );
         return Redirect()->back()->with($notification);
    }


    public function edit_postcomment($id)
    {
         $id=post_comment::where('id',$id)->get();
          // return response()->json( $id);
         return view('admin.update_postcomment',compact('id'));
    }

    public function update_postcomment(Request $request ,$id)
    {
        // return response()->json(  $request);

         $validatedData = $request->validate([

          'comment' => ['required', 'string',],



                ]);
          $id=post_comment::find($id);
          $id->comment=$request->comment;



             $id->save();
             $notification=array(
                   'messege'=>'Successfully school information  Inserted',
                   'alert-type'=>'success'
                    );
                  return Redirect()->route('admin.editpostcomment')->with($notification);

    }

    public function counts()
    {
        
        $totalComment = DB::table('comments')->count();
        $totalSchool = DB::table('school_infos')->count();
        $totalUser = DB::table('users')->count();
        $totalAdmin = DB::table('admins')->count();

        return view('admin',compact('totalComment','totalSchool','totalUser','totalAdmin'));
    }



     public function profile()
    {
        return view('admin.profile');
    }





}
