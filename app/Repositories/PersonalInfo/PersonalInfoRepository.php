<?php  

namespace App\Repositories\PersonalInfo;

interface PersonalInfoRepository
{
	function getAll();
	function create(array $attributes);
	function update($id,array $attributes);
	function delete($id);
}
