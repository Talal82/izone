<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function getAccountSettings(){
        return view('admin_pages.settings.account');
    }

    public function updateAccountSettings(Request $request, $id){
        $errors = [];
        $this -> validate($request, array(
            'name' => 'required',
            'email' => 'required | email'
        ));

        if($request -> password != ''){
            if(Hash::check($request -> password, Auth::user()-> password) == false){
                Session::flash('error', 'Your old password is invalid!');
                return redirect() -> back();
            } 
            // if( $request -> new_password != $request -> confirm_password){
            //     Session::flash('error', 'Your New Password does not match Confirm Password');
            //     return redirect() -> back();
            // }
        }else{
            Session::flash('error', 'Your old password field is empty');
            return redirect() -> back();
        }

        if (count($errors) > 0) {
            return redirect()
                ->back()
                ->withErrors($errors)
                ->withInput();
        }

        $user = User::find(Auth::user() -> id);
        $user -> password = bcrypt($request -> new_password);
        $user -> save();

        Session::flash('success', 'Password Changed Successfully');
        return redirect() -> back();
    }
}
