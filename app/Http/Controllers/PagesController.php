<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Benefit;
use App\Certificate;
use App\GalleryImage;
use App\Office;
use App\Service;
use App\Project;
use App\About;
use App\Introduction;
use App\Value;
use Toastr;
use Session;
use Mail;

class PagesController extends Controller
{
    public function getIndex(){
        $banners = Banner::all();
        $benefits = Benefit::all();
        $certificates = Certificate::all();
        $introductions = Introduction::all();
        $featuredProjects = Project::where('featured', true)->get();
        // dd(gettype($featuredProjects));

        $certLength = count($certificates) / 3;
        
        return view('pages.index') -> withBanners($banners)-> withBenefits($benefits) -> withCertificates($certificates) -> withCertLength($certLength) -> withIntroductions($introductions) ->withFeaturedProjects($featuredProjects);
    }

    public function getAbout(){
        $about = About::Find(1);
        $values = Value::all();
    	return view('pages.about') -> withAbout($about) -> withValues($values);
    }

    public function getServices(){
    	return view('pages.services');
    }

    public function getProjects(){
        $projects = Project::all();
    	return view('pages.projects') -> withProjects($projects);
    }

    public function getCompletedProjects(){
        $projects= Project::where('status','Completed')->get();
        return view('pages.projects') -> withProjects($projects);
    }

    public function getOngoingProjects(){
        $projects = Project::where('status', 'Ongoing') -> get();
        return view('pages.projects') -> withProjects($projects);
    }

    public function getGallery(){
        $galleryImages = GalleryImage::all();
    	return view('pages.gallery') -> withGalleryImages($galleryImages);
    }

    public function getCertificates(){
        $certificates = Certificate::all();
        return view('pages.certificates') -> withCertificates($certificates);
    }

    public function getCareers(){
    	return view('pages.careers');
    }

    public function getContact(){
        $offices = Office::all();
    	return view('pages.contact')->withOffices($offices);
    }

    public function postContact(Request $request){
        $this -> validate($request, [
            'name' => 'required | min:5 | max:15',
            'email' => 'required | email',
            'phone' => 'required',
            'subject' => 'required | min:5',
            'body' => 'required | min:10 | max:1000'
        ]);

        $data = array(
            'name' => $request -> name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'subject' => $request -> subject,
            'body' => $request -> body
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message -> from($data['email']);
            $message -> to('talalanwer2424@gmail.com');
            $message -> subject($data['subject']);
        });
        // Session::flash('success','Mail Sent Successfully!');
        Toastr::success('Your Email has been Sent!', 'Success');
        return redirect()->route('contact');
    }

    public function getLargeService($id){
        $service = Service::Find($id);
        return view('pages.services_large') -> withService($service);
    }

    public function getLargeProject($id){
        $project = Project::find($id);
        $projectStatus = $project -> status;
        // dd($projectStatus);
        $relatedProjects = Project::where('status', $projectStatus)->get();
        return view('pages.proj_large') -> withProject($project) -> withRelatedProjects($relatedProjects);
    }

}
