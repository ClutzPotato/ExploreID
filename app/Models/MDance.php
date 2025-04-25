<?php

namespace App\Models;

use CodeIgniter\Model;

class MDance extends Model
{
	protected $table = "dance";
	public function getDance($id = false)
	{
		if ($id === false) {
			return $this->table('dance')
				->orderBy('dance_id', 'ASC')
				->get();
		} else {
			return $this->table('dance')
				->where('dance_id', $id)
				->get()
				->getRowArray();
		}
	}
	public function saveRegDance($data)
	{
		$query = $this->db->table('dance')->insert($data);
		return $query;
	}
	public function getdance_id($id=false)
	{
		return $this->db->table('dance')
						->where('dance_id', $id)
						->get()
						->getResultArray();
	}
	public function saveEditDance($data, $id)
	{
		$query = $this->db->table('dance')->update($data, ['dance_id' => $id]);
		return $query;
	}
	public function delete_data($table, $key, $id)
	{
		return $this->db->table($table)->delete([$key=>$id]);
	}

}


