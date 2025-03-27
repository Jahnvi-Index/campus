<?php

namespace App\Http\Controllers\Home;
use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image As Image;


class AboutController extends Controller
{
    public function AboutPage()
    {    
          $aboutpage=About::find(1);
          return view('admin.about_page.about_page_all',compact('aboutpage'));
    }//end method


    public function UpdateAbout(Request $request)
    {
      $about_id=$request->id;
      if($request->file('about_image'))
      {
        $image=$request->file('about_image');
        $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();//334343434.jpg
        Image::make($image)->resize(636,852)->save('upload/home_about/'.$name_gen);
        $save_url='upload/home_about/'.$name_gen;
        About::findOrFail($about_id)->update([
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
        About::findorfail($about_id)->update([
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
      
      
    }//end of method

    
}
