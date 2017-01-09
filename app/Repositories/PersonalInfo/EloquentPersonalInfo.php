<?php 
namespace App\Repositories\PersonalInfo;

use App\Model\PersonalInfo;


class EloquentPersonalInfo implements PersonalInfoRepository{

	private $personalInfo;

	public function __construct(PersonalInfo $personalInfo)
	{
		$this->personalInfo=$personalInfo;
	}


	function getAll()
	{
		return $this->personalInfo->all();

	}
	function create(array $attributes)
	{
		return $this->personalInfo->create($attributes);
		
	}
	function update($id,array $attributes){
		return $this->personalInfo->findorfail($id)->update($attributes);
	}
	function delete($id){
		return $this->personalInfo->findorfail($id)->delete();

	}

}
