<?php
namespace App\Http\Controllers;
use App\Models\userregi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Str;


class SendMailController extends Controller
{
     public function SendMail()
     {    
        return view('admin.user_info.sendMail');

   }//end method
    public function SendtoUser()
    {    
     $user= DB::select('select  name, email from userregis');
     return view('admin.user_info.sendMail',['user'=>$user]);
        

    }//end method
    //  public function sent()
    //  {
    //     $data=['name'=>"janvi",
    //      'verification_code'=>"what",
    // ];
    // //  Mail::(users:'')->send(new singupmail());
    //  }
     public function sent(Request $request)
    {
        //  $user=DB::select('select email from userregis');
        $email = $request->get('email');
         $result = DB::table('userregis')->select('email')->where('email',$email)->get();
        $request->session()->put('email',$result);
         //retriving data
        $email=$request->session()->get('email');
        //  var_dump(DB::table('userregi')->select('email')->first();)
        
        Mail::to($email)->send(new MailSend());
     }
      public function sender(Request $request)
  {
//        // storing data
//       // $user=DB::select('select email from userregis');
        $result = DB::table('userregi')->select('email')->first();
        $request->session()->put('email',$result);
         //retriving data
        $email=$request->session()->get('email');
        var_dump( $email);
    //    Mail::to($email)->send(new MailSend());
       //$result = DB::table('users')->select('groupName')->where('username', $username)->first();

     }//end method

   
}



    

       
        
        
