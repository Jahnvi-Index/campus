<?php
namespace App\Http\Controllers;
use App\Models\UserInfo;
use App\Models\userregi;
use Intervention\Image\Facades\Image As Image;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class userdtlController extends Controller
{
     public function UserDtl(Request $request)
     {
    //   // $userinfo=userregi::find(1);
       return view('admin.user_info.user_info_all');
    }
    public function UserInfo(Request $request)
    {
      // $filename=time(). '.' .request()->u_iamge->getClientOriginalExtension();
      // request()->image->move(public_path('iamges'),$filename);
      $userregi=new userregi;
      $userregi->name=$request->input('name');
      $userregi->email=$request->input('email');
      $userregi->password=$request->input('password');
      $userregi->stream=$request->input('stream');
      if($request->hasFile('u_image'));
      {
        $file=$request->file('u_image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/user/',$filename);
        $userregi->u_image=$filename;
      }
      $userregi->save();
      $notification =array(
        'message'=>'user added successfully',
        'alter-type'=>'success');
     // return redirect()->back()->with($notification);
      return redirect('http://127.0.0.1:8000/sent/mail')->with($notification);
      
  
      


    }//end of method 

    public function detail(Request $request)
    {
      $userregi=new userregi;
      $users = DB::table('userregis')->select('*')->get();
      return view('detail', ['users' => $users]);
    }//end method
      
} 
 