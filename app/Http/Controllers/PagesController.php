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
    public function getCareers(){
    	return view('pages.careers');
    }

    public function getContact(){
        $offices = Office::all();
    	return view('pages.contact')->withOffices($offices);
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
