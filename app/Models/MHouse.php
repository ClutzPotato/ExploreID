<?php

namespace App\Models;

use CodeIgniter\Model;

class MHouse extends Model
{
	protected $table = "house";
	public function getHouse($id = false)
	{
		if ($id === false) {
			return $this->table('house')
				->orderBy('house_id', 'ASC')
				->get();
		} else {
			return $this->table('house')
				->where('house_id', $id)
				->get()
				->getRowArray();
		}
	}
	public function saveRegHouse($data)
	{
		$query = $this->db->table('house')->insert($data);
		return $query;
	}
	public function gethouse_id($id=false)
	{
		return $this->db->table('house')
						->where('house_id', $id)
						->get()
						->getResultArray();
	}
	public function saveEditHouse($data, $id)
	{
		$query = $this->db->table('house')->update($data, ['house_id' => $id]);
		return $query;
	}
	public function delete_data($table, $key, $id)
	{
		return $this->db->table($table)->delete([$key=>$id]);
	}

}


