<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\SocialIcon;
use Session;
use Toastr;
use Hash;
use Auth;
use App\User;

class GeneralSettingsController extends Controller
{
    public function __construct(){
        $this -> middleware('auth');
    }
    
    public function getGeneralSettings(){
        $facebook = SocialIcon::where('title', 'Facebook')->first();
        $twitter = SocialIcon::where('title', 'Twitter')->first();
        $instagram = SocialIcon::where('title', 'Instagram')->first();
        $google = SocialIcon::where('title', 'Google')->first();

        return view('admin_pages.settings.general_settings.index') -> withFacebook($facebook) -> withTwitter($twitter) -> withInstagram($instagram) -> withGoogle($google);
    }

    public function updateHeaderInfo(Request $request, $id){
        $this->validate($request, array(
            'site_title' => 'required',
            'email' => 'required | email',
            'phone' => 'required | min:9 | max:20',
            'fax' => 'required | min:9 | max:15',
            'address' => 'required | min:20 | max:70'
        ));
        $info = Info::find($id);

        $info -> site_title = strtoupper($request -> site_title);
        $info -> email = $request -> email;
        $info -> phone = $request -> phone;
        $info -> fax = $request -> fax;
        $info -> type = $info -> type;
        $info -> address = $request -> address;

        $info -> save();

        // Session::flash('success', 'Information Updated Successfully!');
        Toastr::success('Informatin Updated Successfully!', 'Success');

        return redirect() -> route('settings.index');
    }

    public function updateFooterInfo(Request $request, $id){
        $this->validate($request, array(
            'email' => 'required | email',
            'phone' => 'required | min:9 | max:20',
            'fax' => 'required | min:9 | max:15',
            'address' => 'required | min:20'
        ));
        $info = Info::find($id);

        $info -> email = $request -> email;
        $info -> phone = $request -> phone;
        $info -> fax = $request -> fax;
        $info -> type = $info -> type;
        $info -> address = $request -> address;

        $info -> save();

        // Session::flash('success', 'Information Updated Successfully!');
        Toastr::success('Information Updated Successfully!', 'Success');

        return redirect() -> route('settings.index');
    }

    public function updateSocialLinks(Request $request, $id){
        
    }

    
}
