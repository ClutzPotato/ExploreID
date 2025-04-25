<?php

namespace App\Models;

use CodeIgniter\Model;

class MInstrument extends Model
{
	protected $table = "instrument";
	public function getInstrument($id = false)
	{
		if ($id === false) {
			return $this->table('instrument')
				->orderBy('instrument_id', 'ASC')
				->get();
		} else {
			return $this->table('instrument')
				->where('instrument_id', $id)
				->get()
				->getRowArray();
		}
	}
	public function saveRegInstrument($data)
	{
		$query = $this->db->table('instrument')->insert($data);
		return $query;
	}
	public function getinstrument_id($id=false)
	{
		return $this->db->table('instrument')
						->where('instrument_id', $id)
						->get()
						->getResultArray();
	}
	public function saveEditInstrument($data, $id)
	{
		$query = $this->db->table('instrument')->update($data, ['instrument_id' => $id]);
		return $query;
	}
	public function delete_data($table, $key, $id)
	{
		return $this->db->table($table)->delete([$key=>$id]);
	}

}


