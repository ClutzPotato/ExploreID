<?php

namespace App\Models;

use CodeIgniter\Model;

class MFood extends Model
{
	protected $table = "food";
	public function getFood($id = false)
	{
		if ($id === false) {
			return $this->table('food')
				->orderBy('food_id', 'ASC')
				->get();
		} else {
			return $this->table('food')
				->where('food_id', $id)
				->get()
				->getRowArray();
		}
	}
	public function saveRegFood($data)
	{
		$query = $this->db->table('food')->insert($data);
		return $query;
	}
	public function getfood_id($id=false)
	{
		return $this->db->table('food')
						->where('food_id', $id)
						->get()
						->getResultArray();
	}
	public function saveEditFood($data, $id)
	{
		$query = $this->db->table('food')->update($data, ['food_id' => $id]);
		return $query;
	}
	public function delete_data($table, $key, $id)
	{
		return $this->db->table($table)->delete([$key=>$id]);
	}

}


