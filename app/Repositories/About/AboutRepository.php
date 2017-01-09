<?php  

namespace App\Repositories\About;

interface AboutRepository
{
	function getAll();
	function create(array $attributes);
	function update($id,array $attributes);
	function delete($id);
	function getAllAward();
	function createAward(array $attributes);
	function updateAward($id,array $attributes);
	function deleteAward($id);
	
}