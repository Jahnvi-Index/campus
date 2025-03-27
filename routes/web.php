<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\headerAllController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\userdtlController;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('frontend.index');
});
Route::get('/dashboard',function(){
    return view('admin.index');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';


// Route::controller(headerAllController::class)->group(function () {
//     Route::get('/hello','new')->name('new.about');

// });
 //admin route
 Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout','destroy')->name('admin.logout');
    Route::get('/admin/profile','profile')->name('admin.profile');
    Route::get('/edit/profile','Editprofile')->name('edit.profile');
    Route::post('/store/profile','Storeprofile')->name('store.profile');
    Route::get('/change/password','ChangePassword')->name('change.password');
    Route::get('/update/password','UpdatePassword')->name('update.password');



});
//home slide all controller
Route::controller(HomeSliderController::class)->group(function () {
    Route::get('/home/slide','HomeSlider')->name('home.slide');
    Route::post('/update/slider','UpdateSlider')->name('update.slider');
});
//all home about controller
Route::controller(AboutController::class)->group(function () {
    Route::get('/about/page','AboutPage')->name('about.page');
    Route::post('/update/about','UpdateAbout')->name('update.about');

    
});
//all user routes
Route::controller(userdtlController::class)->group(function () {
    Route::post('/user/info','UserInfo')->name('user.info');
    Route::get('/user/info','UserDtl')->name('user.info');
    Route::get('/user/details','Detail')->name('user.detail');

    
});





// //email controller

// Route::controller(EmailController::class)->group(function () {

// });



// //all profile controller
// Route::controller(ProfileController::class)->group(function () {
    

// });

 //all send mail route
 Route::controller(SendMailController::class)->group(function () {
    Route::get('/sent/mail','SendtoUser')->name('send.mail');



    Route::get('/send/mail','Sent')->name('send.mail');
    Route::get('/sent/mailss','Sender')->name('send.mail');




 });


 //all user route
 Route::controller(headerAllController::class)->group(function () {
    Route::get('/home/about','HomeAbout')->name('home.about');
    Route::get('/new/about','new')->name('new.about');
    Route::get('/new/articalse','articales')->name('new.articales');
    Route::get('/our/journey','journey')->name('our.journey');
    Route::get('/contact/mer','contactme')->name('contact.me');
    // Route::get('/loginuser','userlogin')->name('user.login');
    Route::get('/userpage','userpage')->name('user.page');
    Route::get('/login/page','login')->name('login.user');
    //Route::get('/login/user','login')->name('login.user');
  //Route::get('/login/user','login')->name('loginn.user');
  Route::post('/login/user','user')->name('user.login');
  Route::get('/write/page','write')->name('write.page');
   //Route::get('/page/page','paste')->name('paste.page');
  Route::post('/post/done','send')->name('send.page');

   //route of write button
     Route::post('/post/post','janvi')->name('post.post');





  Route::get('/user/profile','userprofile')->name('user.profile');

  Route::post('/post/page','makepost')->name('post.page');
  //post show routes
  Route::get('/show/post','show')->name('post.show');
  //admin side post show
  Route::get('/admin/post','adminpost')->name('adshow.post');
  //admin delete post
//   Route::get('Adelete/post','Adeletepost')->name('delete.post');

//story raoute
Route::get('/story/post','storyAdmin')->name('story.adminpost');
Route::post('/update/story','UpdateStory')->name('update.story');

//social route
Route::get('/social/post','socialAdmin')->name('social.adminpost');

//work route
Route::get('/work/post','workAdmin')->name('work.adminpost');


//route of admin post show in story
Route::get('/admin/post/story','adminPostStory')->name('admin.poststory');







 });
 //user login route
//  Route::namespace('user')->prefix('user')->name('user.')->group(function(){
//     Route::namespace('Auth')->group(function(){ 
//         //login route
//         Route::get('login','Auth\AuthenticatedSessionController@create')->name('login');
//         Route::post('login','Auth\AuthenticatedSessionController@store')->name('userlogin');
//     });
//     Route::get('/dashboard','userloginController@index')->name('dashboard');
//  });

// //all user dtl route
// Route::controller(headerAllController::class)->group(function () {
    

// });



