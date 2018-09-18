<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Storage;
use Image;
use Session;
use Illuminate\Support\Facades\Input;
use Toastr;


class ProjectController extends Controller
{
    protected $breadCrumb;


    public function __construct(){
        $this -> middleware('auth');
        $this -> breadCrumb = array(
            array(
                'link' => route('home'),
                'text' => 'Dashboard'
            ),
            array(
                'link' => route('project.index'),
                'text' => 'Projects'
            ),
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crumb = array(
            'link' => '',
            'text' => 'Index'
        );
        array_push($this -> breadCrumb, $crumb);
        $projects = Project::all();
        // dd($projects)
        return view('admin_pages.projects.index') -> withProjects($projects) -> withBreadCrumb($this -> breadCrumb);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crumb = array(
            'link' => '',
            'text' => 'Create'
        );
        array_push($this -> breadCrumb, $crumb);
        return view('admin_pages.projects.create') -> withBreadCrumb($this -> breadCrumb);
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
            'title' => 'required',
            'name' => 'required',
            'owner' => 'required',
            'consultant' => 'required',
            'main_image' => 'required | image',
            'detail' => 'required | min:20 | max:1000'
        ));

        $project = new Project;

        $project -> title = strtoupper($request -> title);
        $project -> name = ucfirst($request -> name);
        $project -> owner = ucwords($request -> owner);
        $project -> consultant = ucfirst($request -> consultant);
        $project -> status = $request -> status;

        if($request -> featured){
            $project -> featured = true; 
        }
        else{
            $project -> featured = false;
        }

        //storing image in database and directory
        $image = $request -> file('main_image');
        $filename = time().'.'.$image -> getClientOriginalExtension();//image intervention
        $location = public_path('images/'.$filename);
        Image::make($image) -> save($location);

        $project -> main_image = $filename;
        $project -> detail = $request -> detail;

        $project -> save();

        // Session::flash('success', 'Project Created Successfully!');
        Toastr::success('Project Created Successfully!', 'Success');
        return redirect() -> route('project.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('admin_pages.projects.show') -> withProject($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crumb = array(
            'link' => '',
            'text' => 'Edit'
        );
        array_push($this -> breadCrumb, $crumb);
        $project = Project::find($id);
        return view('admin_pages.projects.edit') -> withProject($project) -> withBreadCrumb($this -> breadCrumb);
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
            'name' => 'required',
            'owner' => 'required',
            'consultant' => 'required',
            'main_image' => 'sometimes | image',
            'detail' => 'required | min:20 | max:1000'
        ));

        $project = Project::find($id);

        $project -> title = strtoupper($request -> title);
        $project -> name = ucfirst($request -> name);
        $project -> owner = ucwords($request -> owner);
        $project -> consultant = ucfirst($request -> consultant);
        $project -> status = $request -> status;
        $project -> detail = $request -> detail;

        if($request -> featured){
            $project -> featured = true; 
        }
        else{
            $project -> featured = false;
        }


        if($request -> hasFile('main_image')){
            //storing image in database and directory
            $image = $request -> file('main_image');
            $filename = time().'.'.$image -> getClientOriginalExtension();//image intervention
            $location = public_path('images/'.$filename);
            Image::make($image) -> save($location);

            $project -> main_image = $filename;
        }
        
        $project -> save();

        // Session::flash('success', 'Project Updated Successfully!');
        Toastr::success('Project has been Updated!', 'Success');
        return redirect() -> route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        Storage::delete($project -> main_image);
        $project -> delete();

        // Session::flash('success', 'Project Deleted Successfully!');
        Toastr::success('Office Deleted Successfully!', 'Success');
        return redirect() -> route('project.index');
    }

    public function changeVisibility($id){
        // echo "ho gya";
        $project = Project::find($id);

        if($project -> featured){
            $project -> featured = false;
        }else{
            $project -> featured = true;
        }

        $project -> save();
        return redirect() -> back();
    }

    public function bulkAction(Request $request){
        // $ids = Input::get('ids');
        if($request -> ajax()){
            // $data = json_decode($request -> all());
            // $data = $request -> all();
            $data = $request -> input('ids');
            // $data = Input::get('ids');
            // $data = $_POST['ids'];
            dd($data);
            // echo $data;
            echo "success";
        }

        
        // return response() -> json("success");
    }
}
