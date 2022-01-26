<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class UserController extends Controller
{
    public function loginView(){
        return view('website.pages.login');
    }
    public function registration(Request $request)
    {
//        dd($request->all());
        User::create([
           'name'=>$request->user_name,
           'email'=>$request->user_email,
           'password'=>bcrypt($request->user_password),
           'NID'=>$request->nid,
           'Address'=>$request->Address,
           'Gender'=>$request->gender,
           'DOB'=>$request->DOB,
           'mobile'=>$request->user_mobile
        ]);

        return redirect()->back()->with('message','Registration successful.');


    }


    public function login(Request $request)
    {

        $userInfo=$request->except('_token');


        if(Auth::attempt($userInfo)){
            return redirect()->route('website')->with('message','Login successful.');
        }
        return redirect()->back()->with('error','Invalid user credentials');

    }

    public function profile($user_id)
    {
        $user=User::find($user_id);
        return view('website.pages.profile',compact('user'));
       
    }
    public function logout()
    {
        Auth::logout();
     return redirect()->route('website')->with('message','Logging out.');
    }


    public function showForgotForm(){
        return view('website.reset.forgot');
    }

    public function sendResetLink(Request $request){
      $token=\Str::random(64);
      \DB::table('password_resets')->insert([
        'email' => $request->email, 
        'token' => $token, 
        'created_at' => Carbon::now()
      ]);
      $action_link = route('reset.password.form',['token' =>$token,'email'=>$request->email]);
      $body = "We have received a request to reset the password for <b>Tour plan </b> account associated with ".$request->email.".you can reset your password by clicking on the link below";

      \Mail::send('website.reset.email-forgot',['action_link'=> $action_link,'body'=>$body],function($message)use($request){
          $message->from('nusratety7@gmail.com','Tour plan');
          $message->to($request->email,'your name')
                  ->subject('Reset Password');
      });
      return back()->with('success','we have e-mailed your password reset link.');
    }

    public function showResetForm(Request $request, $token = null){
        return view('website.reset.reset')->with(['token' => $token,'email' => $request->email]);
    }

    public function resetPassword(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:4|confirmed',
            'password_confirmation' => 'required'
        ]);
        $check_token = \DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token,
        ])->first();
        if(!$check_token){
            return back()->withInput()->with('fail','Invalid token');
        }
        else{
            User::where('email',$request->email)->update([
                'password'=>\Hash::make($request->password)
            ]);
            \DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();
            return redirect()->route('user.page.login')->with('message','Your password has been changed! You can login with new password.');
        }
    
    }
}