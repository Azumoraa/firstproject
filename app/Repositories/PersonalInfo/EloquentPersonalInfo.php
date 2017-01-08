<?php 
namespace App\Repositories\PersonalInfo;

use App\Model\PersonalInfo;


class EloquentPersonalInfo implements PersonalInfoRepository{

	private $personalInfo;

	public function __contruct(PersonalInfo $personalInfo)
	{
		$this->personalInfo=$personalInfo;
	}


	function getAll()
	{

		return $this->personalInfo->all();

	}
	function create(array $attributes)
	{
		//print_r($attributes);
		$personalInfo1 = new PersonalInfo;
		$personalInfo1->create($attributes);
		return true;
		//return $this->personalInfo->create($attributes);
		

	}
	function update($id,array $attributes){
		$personalInfo = PersonalInfo::findorfail($id);
		$personalInfo['name'] = $attributes['name'];
		$personalInfo['address'] = $attributes['address'];
		$personalInfo['dob'] = $attributes['dob'];
		$personalInfo['email'] = $attributes['email'];
		$personalInfo['description'] = $attributes['description'];
		$personalInfo['website'] = $attributes['website'];
		$personalInfo['phone_no'] = $attributes['phone_no'];

		return $this->personalInfo->find($id)->update($attributes);

	}
	function delete($id){
		return $this->personalInfo->find($id)->delete($id);

	}
}
