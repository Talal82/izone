<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use Session;
use Toastr;

class InfoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = Info::all();
        return view('admin_pages.info.index') -> withInfos($infos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_pages.info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'email' => 'required | email',
            'phone' => 'required | min:9 | max:15',
            'fax' => 'required | min:9 | max:15',
            'type' => 'required',
            'address' => 'required | min:20 | max:70'
        ));

        $info = new Info;

        $info -> email = $request -> email;
        $info -> phone = $request -> phone;
        $info -> fax = $request -> fax;
        $info -> type = $request -> type;
        $info -> address = $request -> address;

        $info -> save();

        // Session::flash('success', 'Information Created Successfully!');
        Toastr::success('Information Created Successfully!', 'Success');

        return redirect() -> route('info.index');
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
        $info = Info::find($id);
        return view('admin_pages.info.edit') -> withInfo($info);
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
        $this->validate($request, array(
            'email' => 'required | email',
            'phone' => 'required | min:9 | max:15',
            'fax' => 'required | min:9 | max:15',
            'type' => 'required',
            'address' => 'required | min:20 | max:70'
        ));
        $info = Info::find($id);

        $info -> email = $request -> email;
        $info -> phone = $request -> phone;
        $info -> fax = $request -> fax;
        $info -> type = $request -> type;
        $info -> address = $request -> address;

        $info -> save();

        // Session::flash('success', 'Information Updated Successfully!');
        Toastr::success('Information Updated Successfully!', 'Success');

        return redirect() -> route('info.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Info::find($id);
        $info -> delete();

        // Session::flash('success', 'Information Deleted Successfully!');
        Toastr::error('Information Deleted Successfully!', 'Success');
        return redirect() -> route('info.index');
    }
}
