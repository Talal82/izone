<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Value;
use Session;
use Toastr;

class ValueController extends Controller
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
        $values = Value::all();
        return view('admin_pages.values.index') -> withValues($values);
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

        $value = new Value;

        $value -> name = $request -> name;
        $value -> detail = $request -> detail;

        $value -> save();

        Toastr::success('Value Saved successfully!', 'Success',[
            'closeButton' => true,
            'closeEasing' => 'swing',
        ]);
        return redirect() -> route('value.index');

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
        $value = Value::find($id);
        return view('admin_pages.values.edit') -> withValue($value);
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

        $value = Value::find($id);

        $value -> name = $request -> name;
        $value -> detail = $request -> detail;

        $value -> save();

        Session::flash('success', 'Value Updated Successfully!');
        return redirect() -> route('value.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $value = Value::find($id);
        $value -> delete();

        Session::flash('success', 'Value Deleted Successfully!');
        return redirect() -> route('value.index');
    }
}
