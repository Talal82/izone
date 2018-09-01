<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Image;
use Storage;
use Session;

class ServiceController extends Controller
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
        $services = Service::all();
        return view('admin_pages.services.index') -> withServices($services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_pages.services.create');
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
            'name' => 'required',
            'detail' => 'required | min:20 | max:150',
            'full_detail' => 'required | min:10 | max:1000',
            'image' => 'required | image',
            'transparent_icon' => 'required | image',
            'visible_icon' => 'required | image'
        ));

        $service =  new Service;

        $service -> name = $request -> name;
        $service -> detail = $request -> detail;
        $service -> full_detail = $request -> full_detail;

        //storing main service image in database and directory
        $image = $request -> file('image');
        $filename = time().rand(1,1000).'.'.$image -> getClientOriginalExtension();//image intervention
        $location = public_path('images/'.$filename);
        Image::make($image)-> save($location);
        $service -> image = $filename;

        //storing transparent icon in database and directory
        $image = $request -> file('transparent_icon');
        $filename = time().rand(1,1000).'.'.$image -> getClientOriginalExtension();//image intervention
        $location = public_path('images/'.$filename);
        Image::make($image)-> save($location);
        $service -> transparent_icon = $filename;

        //storing visible icon in database and directory
        $image = $request -> file('visible_icon');
        $filename = time().rand(1,1000).'.'.$image -> getClientOriginalExtension();//image intervention
        $location = public_path('images/'.$filename);
        Image::make($image) -> save($location);
        $service -> visible_icon = $filename;

        $service -> save();

        Session::flash('success', 'Service Created Successfully!');
        return redirect() -> route('service.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return view('admin_pages.services.show') -> withService($service);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin_pages.services.edit') -> withService($service);
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
            'name' => 'required',
            'detail' => 'required | min:20 | max:150',
            'full_detail' => 'required | min:10 | max:1000',
            'image' => 'sometimes | image',
            'transparent_icon' => 'sometimes | image',
            'visible_icon' => 'sometimes | image'
        ));

        $service =  Service::find($id);

        $service -> name = $request -> name;
        $service -> detail = $request -> detail;
        $service -> full_detail = $request -> full_detail;

        if($request -> hasFile('image')){
            //storing main service image in database and directory
            $image = $request -> file('image');
            $filename = time().rand(1,1000).'.'.$image -> getClientOriginalExtension();//image intervention
            $location = public_path('images/'.$filename);
            Image::make($image)-> save($location);
            $service -> image = $filename;
        }

        if($request -> hasFile('transparent_icon')){
            //storing transparent icon in database and directory
            $image = $request -> file('transparent_icon');
            $filename = time().rand(1,1000).'.'.$image -> getClientOriginalExtension();//image intervention
            $location = public_path('images/'.$filename);
            Image::make($image)-> save($location);
            $service -> transparent_icon = $filename;
        }
        
        if($request -> hasFile('visible_icon')){
            //storing visible icon in database and directory
            $image = $request -> file('visible_icon');
            $filename = time().rand(1,1000).'.'.$image -> getClientOriginalExtension();//image intervention
            $location = public_path('images/'.$filename);
            Image::make($image) -> save($location);
            $service -> visible_icon = $filename;
        }

        $service -> save();

        Session::flash('success', 'Service Updated Successfully!');
        return redirect() -> route('service.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);

        Storage::delete($service -> image);
        Storage::delete($service -> transparent_icon);
        Storage::delete($service -> visible_icon);

        $service -> delete();
        Session::flash('success','Service Deleted Successfully!');
        return redirect() -> route('service.index');
    }
}
