<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\AgentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class MyAccountController extends Controller
{
    public function index(){

      $uid = Auth::id();
      $user = User::where('id',$uid)->first();
      return view('admin.my-account', compact('user'));
    }

    public function update(Request $request){
      $uid = Auth::id();
      $user = User::where('id', $uid)->first();
      $old_pass = $request->old_password;
      $data = $request->except(['_token', 'old_password','new_password']);
      if ($request->hasFile('image')) {
        $image_path = $request->image;
        $filename = $image_path->getClientOriginalName();
        $location = public_path('uploads/agent');
        $image_path->move($location, $filename);
        $data['image'] = $filename;
      }
      if($request->new_password != null && $request->new_password != null){
        if(Hash::check($old_pass, $user->password) && $request->new_password){
          $data['password'] = Hash::make($request->new_password);
        }
        else{
          return redirect()->back()->with('status', 'pass-error');
        }
      }
      $update = User::where('id', $uid)->update($data);
      if($update){
        return redirect()->back()->with('status', 'success');
      }
      else{
        return redirect()->back()->with('status', 'update-error');
      }



    }

}
