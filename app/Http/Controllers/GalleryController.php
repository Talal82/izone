<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GalleryImage;
use Image;
use Storage;
use Session;

class GalleryController extends Controller
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
        $galleryImages = GalleryImage::paginate(5);
        return view('admin_pages.gallery.index') -> withGalleryImages($galleryImages);
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
            'image' => 'required | image'
        ));

        $gallery = new GalleryImage;

        $image = $request -> file('image');
        $filename = time().rand(1,1000).'.'.$image -> getClientOriginalExtension();
        $location = public_path('images/'.$filename);

        Image::make($image) ->save($location);

        $gallery -> image = $filename;

        $gallery -> save();

        Session::flash('success','Image Uploaded Successfully!');
        return redirect() -> route('gallery.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = GalleryImage::find($id);
        Storage::delete($image -> image);
        $image -> delete();

        Session::flash('success','Image Deleted Successfully!');
        return redirect() -> route('gallery.index');
    }
}
