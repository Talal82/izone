<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office;
use Session;

class OfficeController extends Controller
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
        $offices = Office::all();
        return view('admin_pages.offices.index') -> withOffices($offices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_pages.offices.create');
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
            'name' => 'required | min:5',
            'address' => 'required | min:20 | max: 200',
            'po_box' => 'required | min:4',
            'phone' => 'required |min:9 | max:20',
            'fax' => 'required | min:9 | max:20',
            'email' => 'required | email',
            'latitude' => 'required',
            'longitude' => 'required'
        ));

        $office = new Office;

        $office -> name = $request -> name;
        $office -> address = $request -> address;
        $office -> po_box = $request -> po_box;
        $office -> phone = $request -> phone;
        $office -> fax = $request -> fax;
        $office -> email = $request -> email;
        $office -> latitude = $request -> latitude;
        $office -> longitude = $request -> longitude;

        $office -> save();

        Session::flash('success', 'Office Created Successfully');

        return redirect() -> route('office.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $office = Office::find($id);
        return view('admin_pages.offices.show') -> withOffice($office);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $office = Office::find($id);
        return view('admin_pages.offices.edit') -> withOffice($office);
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
            'name' => 'required | min:5',
            'address' => 'required | min:20 | max: 200',
            'po_box' => 'required | min:4',
            'phone' => 'required |min:9 | max:20',
            'fax' => 'required | min:9 | max:20',
            'email' => 'required | email',
            'latitude' => 'required',
            'longitude' => 'required'
        ));

        $office = Office::find($id);

        $office -> name = $request -> name;
        $office -> address = $request -> address;
        $office -> po_box = $request -> po_box;
        $office -> phone = $request -> phone;
        $office -> fax = $request -> fax;
        $office -> email = $request -> email;
        $office -> latitude = $request -> latitude;
        $office -> longitude = $request -> longitude;

        $office -> save();

        Session::flash('success', 'Office Edited Successfully');

        return redirect() -> route('office.show', [$office -> id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $office = Office::find($id);
        $office -> delete();

        Session::flash('success', 'Office Deleted Successfully!');

        return redirect() -> route('office.index');
    }
}
