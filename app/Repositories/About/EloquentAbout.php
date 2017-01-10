<?php 
namespace App\Repositories\About;

use App\Model\Abouts;
use App\Model\Award;


class EloquentAbout implements AboutRepository{

	private $about;
	private $award;

	public function __construct(Abouts $about,Award $award)
	{
		$this->about=$about;
		$this->award = $award;
	}

	function getAll(){
		//return view('backend.about.about');
		return $this->about->all();
	}

	function create(array $attributes){
		$attributes['status']='Inactive';
		return $this->about->create($attributes);

	}

	function update($id,array $attributes){
		return $this->about->findorfail($id)->update($attributes);

	}

	function delete($id){
		return $this->about->findorfail($id)->delete($id);

	}

	function getAllAward(){
		//return view('backend.about.about');
		return $this->award->all();
	}

	function createAward(array $attributes){
		$attributes['status']='Inactive';
		
		return $this->award->create($attributes);

	}

	function updateAward($id,array $attributes){
		return $this->award->findorfail($id)->update($attributes);

	}

	function deleteAward($id){
		return $this->award->findorfail($id)->delete($id);

	}


}


