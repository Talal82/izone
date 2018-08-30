<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Session;
use Storage;
use Image;

class AboutController extends Controller
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
        $about = About::all() -> first();
        return view('admin_pages.about.index') -> withAbout($about);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'title' => 'required',
            'about_detail' => 'required | min:200',
            'main_image' => 'sometimes | image',
            'vision_detail' => 'required | min:100',
            'vision_image' => 'sometimes | image',
            'mission_detail' => 'required | min:100',
            'mission_image' => 'sometimes | image'
        ));

        $about = About::find($id);

        $about -> about_detail = $request -> about_detail;
        $about -> vision_detail = $request -> vision_detail;
        $about -> mission_detail = $request -> mission_detail;

        // if($request -> hasFile('main_image' || 'vision_image' || 'mission_image')){
            if($request -> hasFile('main_image')){
                //storing image in public/images directory
                $image = $request -> file('main_image');
                $filename = time().'main'.'.'.$image -> getClientOriginalExtension();//image intervention
                $location = public_path('images/'.$filename);
                Image::make($image)-> save($location);

                //grab old filename before updating the database
                $oldFileName = $about -> main_image;

                //storing filename for that image in database
                $about -> main_image = $filename;

                //delete the old photo (Note: also change the local storage path in config/filesystems.php before doing it)
                Storage::delete($oldFileName);
            }
            if($request -> hasFile('vision_image')){
                $image = $request -> file('vision_image');
                $filename = time().'vision'.'.'.$image -> getClientOriginalExtension();//image intervention
                $location = public_path('images/'.$filename);
                Image::make($image)-> save($location);

                //grab old filename before updating the database
                $oldFileName = $about -> vision_image;

                //storing filename for that image in database
                $about -> vision_image = $filename;

                //delete the old photo (Note: also change the local storage path in config/filesystems.php before doing it)
                Storage::delete($oldFileName);
            }
            if($request -> hasFile('mission_image')){
                $image = $request -> file('mission_image');
                $filename = time().'mission'.'.'.$image -> getClientOriginalExtension();//image intervention
                $location = public_path('images/'.$filename);
                Image::make($image)-> save($location);

                //grab old filename before updating the database
                $oldFileName = $about -> mission_image;

                //storing filename for that image in database
                $about -> mission_image = $filename;

                //delete the old photo (Note: also change the local storage path in config/filesystems.php before doing it)
                Storage::delete($oldFileName);
            }
        // }

        $about -> save();
        Session::flash('success', 'About Us Information Updated Successfully!');
        return redirect() -> route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
