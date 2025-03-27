<?php

namespace App\Http\Controllers;

use App\Models\userregi;
use App\Models\userdtl;
use App\Models\user_infos;
use App\Models\userdtl as ModelsUserdtl;
use App\Models\UserInfo;
use App\Models\Post;
use App\Models\story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
//use Symfony\Component\HttpFoundation\Session\Session;
use Intervention\Image\Facades\Image As Image;




class headerAllController extends Controller
{

    public function HomeAbout()
    {
        return view('frontend.about_page');
    }//end method
    public function new()
    {
        return view('frontend.body.newaboutus');
    }//end method

    public function articales()
    {
        return view('frontend.body.our_articales');
    }//end method

    public function journey()
     {
     return view('frontend.body.journey');
      }//end method

      
      public function contactme()
     {
         return view('frontend.body.contactme');
      }//end method

    
      public function userpage()
      {
        return view('frontend.home_all.userhead');
      }

      public function login()
      {
         return view('auth.loginuser');
      }
      public function user(Request $request)
    { 

        $email=$request->post('email');
        //$password=$request->post('password');
    
      $result=userregi::where(['email'=>$email])->first();
      if(!$result)
     { 
        $notification=session()->flash('message','Please enter valid details');
        return redirect()->back()->with ($notification);

            //   $users = DB::table('userregis')->select('*')->where(['email',"=",$result])->get();
            //     $request->session()->put('email',$email);
            //      $request->session()->put('name',$users->name);
            //      $request->session()->put('id',$users->id);
            //       $request->session()->put('password',$users->password);
            //       $request->session()->put('stream',$users->stream);
            //       $request->session()->put('u_image',$users->u_image);
            //       return view('frontend.home_all.userhead');    
      }
        
         else{
              // $users = DB::table('userregis')->select('*')->where(['email',"=",$result])->get();
                 $request->session()->put('email',$email);
                  $request->session()->put('name',$result->name);
                  $request->session()->put('id',$result->id);
                  $request->session()->put('password',$result->password);
                   $request->session()->put('stream',$result->stream);
                   $request->session()->put('u_image',$result->u_image);
                     
                   $post=new post;
                   $id=request()->session()->get('id');
                    $post = DB::table('table_name')->select('*')->where('user_id','!=',$id)->get();
                  //return view('frontend.home_all.userhead', );

                   return view('frontend.home_all.userhead',['users' => $post]); 
         }
            // return redirect('user');
        
        

        // $email=$request->post('email');
        // Session::put('email', $email);
        // $users = DB::table('userregis')
        // ->select('*')->where(["email","=",session('email')])->get();
        
        //  $request->session()->put('email',$email);
        // $request->session()->put('name',$users->name);
        //  $request->session()->put('id',$users->id);
        //  $request->session()->put('password',$users->password);
        //  $request->session()->put('stream',$users->stream);
        //  $request->session()->put('u_image',$users->u_image);

        //  return view('frontend.home_all.userhead');
        
       
        



         }
    public function write()
    {
        return view('write');
    }

    public function makepost()
    {
        $notification =array(
            'message'=>' successfully posted',
            'alter-type'=>'success');
            
            return view('write')->with ($notification);
        //return view('write')->with('success','post successfully');
    }
    public function janvi()
    {
        return view('write');
    }



    // public function paste()
    // {
    //     return view('write');
    // }
    public function userprofile()
    {
       
            return view('userdtl.user_profile_view');



    }
    public function send(Request $request)
    {
    $post = new Post;
    $post->user_id =request()->session()->get('id');
    $post->title = $request->input('title');
    $post->short_desc = $request->input('short_desc');
    $post->story = $request->input('story');
    if($request->hasFile('image'));
      {
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/user/',$filename);
        $post->image=$filename;
      }
      $post->save();
      $notification =array(
         'message'=>'user added successfully',
        'alter-type'=>'success');
     return view('write')->with($notification);

    }
    public function show()
    {
        //$post=new post;
        $id=request()->session()->get('id');
        $post=post::where('user_id',$id)->get();
        //
        // print_R($post);
        if(!$post)
        {
            $notification=session()->flash('message','Please enter valid details');
        return redirect()->back()->with ($notification);
        }
        else
        {
            return view('frontend.ShowPost', ['users' => $post]);
        }






     // $post = DB::table('table_name')->select('*')->get();
      






      
    }
    //    public function showHome()
    //   {
    //      $post=new post;
    //    $post = DB::table('table_name')->select('*')->get();
    //    return view('frontend.home_all.userhead', ['users' => $post]);
    //   }
   
   
    public function adminpost()
    {
        $post=new post;
        $post = DB::table('table_name')->select('*')->get();
        //return view('frontend.home_all.userhead', );
        return view('AdminPostShow',['users' => $post]);
}
//    public function Adeletepost(Request $request)
//    {
//     $post=new post;
//     $id=$request->post('userid');
//     $post =DB::table('table_name')->where('id', $id)->delete();
//     return view('AdminPostShow',['users' => $post]);


//    }



public function storyAdmin()
{
    

    return view('story');
}
public function adminPostStory()
{
    $storyadmin=story::find(4);
    return view('storyadmin',compact('storyadmin'));
}

public function UpdateStory(Request $request)
{
    $about_id=$request->id;
    if($request->file('about_image'))
    {
      $image=$request->file('about_image');
      $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();//334343434.jpg
      Image::make($image)->resize(636,852)->save('upload/home_about/'.$name_gen);
      $save_url='upload/home_about/'.$name_gen;
      story::findOrFail($about_id)->update([
        'title'=>$request->title,
        'short_title'=>$request->short_title,
        'short_description'=>$request->short_description,
        'long_description'=>$request->long_description,
        'about_image'=>$save_url,
       
      ]);
      $notification =array(
        'message'=>'About page with image updated successfully',
        'alter-type'=>'success');
        
    return redirect()->back()->with ($notification);  
    }//end if
    else{
      story::findorfail($about_id)->update([
        'title'=>$request->title,
        'short_title'=>$request->short_title,
        'short_description'=>$request->short_description,
        'long_description'=>$request->long_description,
       
      ]);
      $notification =array(
        'message'=>'About page without image updated successfully',
        'alter-type'=>'success');
        
    return redirect()->back()->with ($notification);  
    }//end else
}

public function socialAdmin()
{
    return view('social');
}
public function workAdmin()
{
    return view('work');
}
}

    

     


    
