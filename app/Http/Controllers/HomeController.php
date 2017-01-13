<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PersonalInfo;
use App\Model\Abouts;
use App\Model\Award;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalInfos = PersonalInfo::take(1)->get();
        $about = Abouts::where('status','active')->first();
        //return $about;
        $awards = Award::where('about_id',$about['id'])->where('status','active')->get();

        //return $personalInfo;
        return view('frontend.index',compact('personalInfos','about','awards'));
    }

}
