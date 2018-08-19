<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
    	return view('pages.index');
    }

    public function getAbout(){
    	return view('pages.about');
    }

    public function getServices(){
    	return view('pages.services');
    }

    public function getProjects(){
    	return view('pages.projects');
    }

    public function getGallery(){
    	return view('pages.gallery');
    }
    public function getCareers(){
    	return view('pages.careers');
    }

    public function getContact(){
    	return view('pages.contact');
    }

    public function getLargeService(){
        return view('pages.services_large');
    }

    public function getLargeProject(){
        return view('pages.proj_large');
    }

}
