<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\school_info;
use \App\comment;
use \App\User;
use \App\school_post;
use \App\post_comment;
use \App\like;
use Illuminate\Support\Arr;
use Illuminate\Support\Arr\array_pull;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use \App\fee_structures;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //static view of schooldetail page
     public function schooldetailview()
     {

       $school_info = DB::table('school_infos')->where('school_id', '=', 2)->get();
       return view('schooldetail',compact('school_info', 'location','school'));

     }


     //four random school in school page
     public function schoolview()
     {
        $array = [6,7,8,9];
        $random= Arr::random($array);
        $random1= Arr::random($array);
        $random2= Arr::random($array);
        $random3= Arr::random($array);
       $school_info=school_info::all();
       return view('school',compact('random','random1','random2','random3','school_info'));
     }



     //schooldetail page with the specific shool id and recomendation
      public function schooldetailviewid($id)
      {


        $user =  \App\user::pluck('address');
        $location = \App\location_code::whereIn('loc_name',$user)->get();
        $school_name=school_info::all();

        $comments=comment::all();
        $user=User::all();



        // Main school here
        $school_id = $id;
        $school_info = DB::table('school_infos')->where('school_id', '=', $school_id)->get();



        //area of main school
        $area = $school_info[0]->area;


        //find 1st school in main school's area but not the main school
        $school_info1 = DB::table('school_infos')->where([['area', '=', $area],['school_id', '!=', $school_id],])->inRandomOrder()->first();

        $school_id1= $school_info1->school_id;  //recomendetion 1



        //find 2nd school in main school's area but not the previous two school
        $school_info2 = DB::table('school_infos')->where([['area', '=', $area],['school_id', '!=', $school_id],['school_id', '!=', $school_id1],])->inRandomOrder()->first();

        $school_id2= $school_info2->school_id;  //recomendetion 1




        //find 3rd school in main school's area but not the previous three school
        $school_info3 = DB::table('school_infos')->where([['area', '=', $area], ['school_id', '!=', $school_id],['school_id', '!=', $school_id1], ['school_id', '!=', $school_id2],])->inRandomOrder()->first();

        $school_id3= $school_info3->school_id;  //recomendetion 1




        //recomendation start

        $school_info4 = DB::table('school_infos')->where('school_id', '=', $school_id1)->get();
        $school_info5 = DB::table('school_infos')->where('school_id', '=', $school_id2)->get();
        $school_info6 = DB::table('school_infos')->where('school_id', '=', $school_id3)->get();

        //recomendation end



        return view("schooldetail", compact('school_info','school_info4','school_info5','school_info6','location','school_name','comments','user'));
      }



      public function  school_search(Request $request){

        $search_text=$request->search;

        /////////////////////////edit/////////////////////
        if ($search_text!="")
        {
          $school_info=school_info::orderBy('school_id','desc')
          ->where('school_name','like','%'.$search_text.'%')
          ->orwhere('s_address','like','%'.$search_text.'%')
          ->orwhere('classRange','like','%'.$search_text.'%')

          ->get();

          if(count($school_info)>0)
          {
            return view('searchschool',compact('school_info', 'search_text'));
          }
        }
        return view('warning',compact('search_text'));

      }



      public function commentstore(Request $request , $id)
      {
                  $this->validate($request,[
                   'comment' => 'required'
               ]);

               $comment = new comment();
               $comment->school_id = $id;
               $comment->user_id = Auth::id();

               $comment->comment = $request->comment;
               $comment->save();


               ///////////////////////

                 $user =  \App\user::pluck('address');
                 $location = \App\location_code::whereIn('loc_name',$user)->get();
                 $school_name=school_info::all();


                 $comments=comment::all();
                 $user=User::all();




                 // Main school here
                 $school_id = $id;
                 $school_info = DB::table('school_infos')->where('school_id', '=', $school_id)->get();



                 //area of main school
                 $area = $school_info[0]->area;


                 //find 1st school in main school's area but not the main school
                 $school_info1 = DB::table('school_infos')->where([['area', '=', $area],['school_id', '!=', $school_id],])->inRandomOrder()->first();

                 $school_id1= $school_info1->school_id;



                 //find 2nd school in main school's area but not the previous two school
                 $school_info2 = DB::table('school_infos')->where([['area', '=', $area],['school_id', '!=', $school_id],['school_id', '!=', $school_id1],])->inRandomOrder()->first();

                 $school_id2= $school_info2->school_id;




                 //find 3rd school in main school's area but not the previous three school
                 $school_info3 = DB::table('school_infos')->where([['area', '=', $area], ['school_id', '!=', $school_id],['school_id', '!=', $school_id1], ['school_id', '!=', $school_id2],])->inRandomOrder()->first();

                 $school_id3= $school_info3->school_id;  //recomendetion 1




                 //recomendation start

                 $school_info4 = DB::table('school_infos')->where('school_id', '=', $school_id1)->get();
                 $school_info5 = DB::table('school_infos')->where('school_id', '=', $school_id2)->get();
                 $school_info6 = DB::table('school_infos')->where('school_id', '=', $school_id3)->get();

                 //recomendation end



                 return view("schooldetail", compact('school_info','school_info4','school_info5','school_info6','location','school_name','comments','user'));
                // return response()->json($comments);
                // return view('schooldetail',compact('comment'));
      }
//////////////////////////////////////////school post///////////////////////////

   public function post_home()
   {

     $comment=post_comment::orderBy('created_at','desc')->get();
     $users=User::all();
     $school_post=school_post::orderBy('created_at','desc')->get();
     $like=like::select('like')->get();
      // return response()->json($comment);

     return view('socialnetwork',compact('school_post', 'users','like', 'comment'));
   }

    public function  post_school_store(Request $request)
        {
          $validatedData = $request->validate([

           'title' => ['required', 'string', 'max:5000'],
           'body' => ['required', 'string', 'max:5000'],
           'image' => 'required',
           'status' => 'required',
                 ]);
          $post= new school_post();
          $post->users_id = Auth::id();
          $post->title=$request->title;
          $post->body=$request->body;
          $post->status=$request->status;


          if ($request->hasFile('image')) {
             $image = $request->file('image');
             $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name.'.'.$ext;
             $upload_path='public/rev/admin/school_img/';
             $image_url=$upload_path.$image_full_name;
             $success=$image->move($upload_path,$image_full_name);
             $post->image=$image_url;
              //
            $post->save();

             }
            $post->save();

            $users=User::all();
            $comment=post_comment::orderBy('created_at','desc')->get();

            $school_post=school_post::orderBy('created_at','desc')->get();
            $like=like::select('like')->get();

              return view('socialnetwork',compact('school_post', 'users','like','comment'));
        }


        public function count()
        {
          $users=User::all();
          $school_post=school_post::orderBy('created_at','desc')->get();
          $like=like::select('like')->get();

            return view('socialnetwork',compact('school_post', 'users','like'));
        }



      public function comment_post(Request $request, $id )
      {
        $comments = new post_comment();
        $comments->post_id = $id;
        $comments->user_id = Auth::id();
        $comments->comment = $request->comment;
        $comments->save();


        $users=User::all();
        $comment=post_comment::orderBy('created_at','desc')->get();
        $school_post=school_post::orderBy('created_at','desc')->get();
        $like=like::select('like')->get();
         // return response()->json($request);


         $notification=array(
               'messege'=>'Successfully school information  Inserted',
               'alert-type'=>'success'
                );
              return Redirect()->route('post_home')->with($notification);
      }




      /////////////////review//////////


      public function review()
      {

        $comments=comment::all();
        $user=User::all();

        return view('review',compact('comments','user'));

      }
}
