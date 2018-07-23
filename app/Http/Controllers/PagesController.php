<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showOverview()
    {
    	return view('pages.overview');
    }

    public function showPrincipalsDesk()
    {
    	return view('pages.principals_desk');
    }

    public function showVisionStatement()
    {
    	return view('pages.vision_statement');
    }

    public function showMissionStatement()
    {
    	return view('pages.mission_statement');
    }

    public function showFuturePlanAndThoughts()
    {
    	return view('pages.future_plan_and_thoughts');
    }    
}
