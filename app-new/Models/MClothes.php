<?php

namespace App\Models;

use CodeIgniter\Model;

class MClothes extends Model
{
	protected $table = "clothes";
	public function getClothes($id = false)
	{
		if ($id === false) {
			return $this->table('clothes')
				->orderBy('clothes_id', 'ASC')
				->get();
		} else {
			return $this->table('clothes')
				->where('clothes_id', $id)
				->get()
				->getRowArray();
		}
	}
	public function saveRegClothes($data)
	{
		$query = $this->db->table('clothes')->insert($data);
		return $query;
	}
	public function getclothes_id($id=false)
	{
		return $this->db->table('clothes')
						->where('clothes_id', $id)
						->get()
						->getResultArray();
	}
	public function saveEditClothes($data, $id)
	{
		$query = $this->db->table('clothes')->update($data, ['clothes_id' => $id]);
		return $query;
	}
	public function delete_data($table, $key, $id)
	{	
		$img = ROOTPATH.'public/database/clothes/clothes_'.$id.'.jpg';
		if (file_exists($img))
		{
		unlink( $img);
		}
		return $this->db->table($table)->delete([$key=>$id]);
	}

}


