<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PersonalInfo\PersonalInfoRepository;
use App\Model\PersonalInfo;


class PersonalInfoController extends Controller
{
	private $personalinfo_repo;

	public function __construct(PersonalInfoRepository $personalinfo_repo)
    {
        $this->middleware('auth');

        $this->personalinfo_repo=$personalinfo_repo;
    }
    public function dashboard(){
    	return view('backend.dashboard');
    }
    public function index(){
        $personalInfos=PersonalInfo::all();
    	return view('backend.personalinfo.personal_info_view',compact('personalInfos'));
    }

    public function create(Request $request){
        $this->personalinfo_repo->create($request->all());
    	return redirect('/admin/personal_info');
    }
   
    public function update($id,Request $request){
        $this->personalinfo_repo->update($id,$request->all());
        
        return redirect('/admin/personal_info');
    }
    public function add(){
        return view('backend.personalinfo.personal_info');
    }
	public function edit($id){
        $personalInfo=PersonalInfo::findorfail($id);
        return view('backend.personalinfo.personal_info_edit',compact('personalInfo'));
    }
    public function delete($id){
        $this->personalinfo_repo->delete($id);
        return redirect('/admin/personal_info');
    }
}


