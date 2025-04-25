<?php

namespace App\Models;

use CodeIgniter\Model;

class MTaboo extends Model
{
	protected $table = "taboo";
	public function getTaboo($id = false)
	{
		if ($id === false) {
			return $this->table('taboo')
				->orderBy('taboo_id', 'ASC')
				->get();
		} else {
			return $this->table('taboo')
				->where('taboo_id', $id)
				->get()
				->getRowArray();
		}
	}
	public function saveRegTaboo($data)
	{
		$query = $this->db->table('taboo')->insert($data);
		return $query;
	}
	public function gettaboo_id($id=false)
	{
		return $this->db->table('taboo')
						->where('taboo_id', $id)
						->get()
						->getResultArray();
	}
	public function saveEditTaboo($data, $id)
	{
		$query = $this->db->table('taboo')->update($data, ['taboo_id' => $id]);
		return $query;
	}
	public function delete_data($table, $key, $id)
	{
		$img = ROOTPATH.'database/taboo/taboo_'.$id.'.jpg';
		if (file_exists($img))
		{
		unlink( $img);
		}
		return $this->db->table($table)->delete([$key=>$id]);
	}

}


