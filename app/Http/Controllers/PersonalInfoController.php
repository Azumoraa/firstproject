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
    	return view('backend.personal_info_view',compact('personalInfos'));
    }

    public function create(Request $request){

		$input=$request->all();
		//$personalInfo = new PersonalInfo();
		//$personalInfo->create($input);
		$this->personalinfo_repo->create($input);
    	return redirect('/admin/personal_info');
    }
    public function about(){
    	return view('backend.about');
    }
    public function update($id,Request $request){
        $input=$request->all();
        $personalInfo=PersonalInfo::findorfail($id);
        $personalInfo->update($input);
        return redirect('/admin/personal_info');
    }
    public function add(){
        return view('backend.personal_info');
    }
	public function edit($id){
        $personalInfo=PersonalInfo::findorfail($id);
        return view('backend.personal_info_edit',compact('personalInfo'));
    }
    public function delete($id){
        $personalInfo=PersonalInfo::findorfail($id);
        $personalInfo->delete();
        return redirect()->back();
    }
}


