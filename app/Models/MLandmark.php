<?php

namespace App\Models;

use CodeIgniter\Model;

class MLandmark extends Model
{
	protected $table = "landmark";
	public function getLandmark($id = false)
	{
		if ($id === false) {
			return $this->table('landmark')
				->orderBy('landmark_id', 'ASC')
				->get();
		} else {
			return $this->table('landmark')
				->where('landmark_id', $id)
				->get()
				->getRowArray();
		}
	}
	public function saveRegLandmark($data)
	{
		$query = $this->db->table('landmark')->insert($data);
		return $query;
	}
	public function getlandmark_id($id=false)
	{
		return $this->db->table('landmark')
						->where('landmark_id', $id)
						->get()
						->getResultArray();
	}
	public function saveEditLandmark($data, $id)
	{
		$query = $this->db->table('landmark')->update($data, ['landmark_id' => $id]);
		return $query;
	}
	public function delete_data($table, $key, $id)
	{
		return $this->db->table($table)->delete([$key=>$id]);
	}

}


