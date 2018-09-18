<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Benefit;
use Toastr;
use Session;

class BenefitController extends Controller
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
        $benefits = Benefit::all();
        return view('admin_pages.benefits.index') -> withBenefits($benefits);
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
            'name' => 'required | min:4',
            'detail' => 'required | min : 20'
        ));

        $benefit = new Benefit;

        $benefit -> name = $request -> name;
        $benefit -> detail = $request -> detail;

        $benefit -> save();

        // Session::flash('success', 'Benefit Saved Successfully!');
        Toastr::success('Benefit Saved Successfully!', 'Success');
        return redirect() -> route('benefit.index');
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
        $benefit = Benefit::find($id);
        return view('admin_pages.benefits.edit') -> withBenefit($benefit);
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
            'name' => 'required | min:4',
            'detail' => 'required | min : 20'
        ));

        $benefit = Benefit::find($id);

        $benefit -> name = $request -> name;
        $benefit -> detail = $request -> detail;

        $benefit -> save();

        // Session::flash('success', 'Benefits Updated Successfully!');
        Toastr::success('Benefit Updated Successfully!', 'Success');
        return redirect() -> route('benefit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $benefit = Benefit::find($id);
        $benefit -> delete();

        // Session::flash('success', 'Benefit Deleted Successfully!');
        Toastr::error('Benefit Deleted Successfully!', 'Success');
        return redirect() -> route('benefit.index');
    }
}
