<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class SearchController extends Controller
{
    public function search(Request $request){
    	$search = $request -> get('q');
    	$searchResult = Project::where('name', 'LIKE', '%'.$search.'%') -> orwhere('title', 'LIKE', '%'.$search.'%') -> paginate(10);

    	return view('pages.search') -> withSearchResult($searchResult);
    }
}
