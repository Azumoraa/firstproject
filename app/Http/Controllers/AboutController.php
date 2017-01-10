<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\About\AboutRepository;
use App\Model\Abouts;
use App\Model\Award;

class AboutController extends Controller
{
    //
    private $about_repo;

	public function __construct(AboutRepository $about_repo)
    {
        $this->middleware('auth');

        $this->about_repo=$about_repo;
    }

    public function about(){
    	return view('backend.about.about');
    }

    public function index(){
        $abouts=Abouts::all();
        $awards=Award::all();
        
        return view('backend.about.about_view',compact('abouts','awards'));
        
    }

    public function create(Request $request){		
        $this->about_repo->create($request->all());
		
    	return redirect('/admin/about');
    }
    public function createAward(Request $request){    
       
        $this->about_repo->createAward($request->all());
        
        return redirect('/admin/about');
    }
   
    public function update($id,Request $request){
        $this->about_repo->update($id,$request->all());
        return redirect('/admin/about');
    }
    public function updateAward($id,Request $request){
        $this->about_repo->updateAward($id,$request->all());
        return redirect('/admin/about');
    }
    public function add(){
        return view('backend.about.about');
    }
	public function edit($id){
        $about=abouts::findorfail($id);
        return view('backend.about.about_edit',compact('about'));
    }
    public function editAward($id){
        $award=Award::findorfail($id);
        return view('backend.about.about_edit',compact('award'));
    }

    public function delete($id){
        $this->about_repo->delete($id);
        return redirect('/admin/about');
    }
    public function deleteAward($id){
        $this->about_repo->deleteAward($id);
        return redirect('/admin/about');
    }
    public function statuschange($id)
    {
        $about=Abouts::findorfail($id);
        if($about['status']=='active'){
            $about['status']='inactive';
        }
        else {
            $about['status']='active';
        }
        $about->update();
        return redirect('/admin/about');
    }
    public function statuschangeAward($id)
    {
        $award=Award::findorfail($id);
        if($award['status']=='active'){
            $award['status']='inactive';
        }
        else {
            $award['status']='active';
        }
        $award->update();
        return redirect('/admin/about');
    }
    public function addAward($id){
        return view('backend.about.award_add',compact('id'));
    }





}
