<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Session;
use Image;
use Toastr;
use Storage;

class BannerController extends Controller
{
    public function __construct(){
        $this -> middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('admin_pages.banners.index') -> withBanners($banners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, array(
            'name' => 'required | min:4 | max:15',
            'detail' => 'required | min:5 | max:50',
            'image' => 'required | image'
        ));

        $banner = new Banner;

        $banner -> name = $request -> name;
        $banner -> detail = $request -> detail;

        //saving image in public/images directory and then saving the name in database

        //storing image in public/images directory
        $image = $request -> file('image');
        $filename = time().'.'.$image -> getClientOriginalExtension();//image intervention
        $location = public_path('images/'.$filename);
        Image::make($image)-> resize( 1920, 500) -> save($location);

        //storing filename for that image in database
        $banner -> image = $filename;


        $banner -> save();

        // Session::flash('success', 'New Banner Added Successfully!');
        Toastr::success('Banner Added Successfully!', 'Success');
        return redirect() -> route('banner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banner::find($id);
        return view('admin_pages.banners.show') -> withBanner($banner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin_pages.banners.edit') -> withBanner($banner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request, array(
            'name' => 'required | min:4 | max:15',
            'detail' => 'required | min:5 | max:50',
            'image' => 'sometimes | image'
        ));

        $banner = Banner::find($id);

        $banner -> name = $request -> name;
        $banner -> detail = $request -> detail;

        //check if the user updated the image or not
        if($request -> hasFile('image')){
            //storing image in public/images directory
            $image = $request -> file('image');
            $filename = time().'.'.$image -> getClientOriginalExtension();//image intervention
            $location = public_path('images/'.$filename);
            Image::make($image)-> resize( 600, 400) -> save($location);

            //grab old filename before updating the database
            $oldFileName = $banner -> image;

            //storing filename for that image in database
            $banner -> image = $filename;

            //delete the old photo (Note: also change the storage path in config/filesystems.php before doing it)
            Storage::delete($oldFileName);

        }


        $banner -> save();

        // Session::flash('success', 'Banner Updated Successfully!');
        Toastr::success('Banner Updated Successfully!', 'Success');
        return redirect() -> route('banner.show', [$banner -> id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        Storage::delete($banner -> image);
        $banner -> delete();

        // Session::flash('success', 'Banner Deleted Successfully!');
        Toastr::error('Banner Deleted Successfully!', 'Success');
        return redirect() -> route('banner.index');
    }
}
