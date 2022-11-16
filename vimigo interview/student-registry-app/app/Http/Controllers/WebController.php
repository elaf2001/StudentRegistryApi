<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Returns the view to upload a file in order to create students by bulk 
     */
    public function uploadStudentsView(Request $request){
        return view('/bulk.create');
    }

    /**
     * Returns the view to search students by name
     */
    public function searchNameView(Request $request){
        return view('/search.name');
    }

    /**
     * Returns the view to search students by email 
     */
    public function searchEmailView(Request $request){
        return view('/search.email');
    }
    
}
