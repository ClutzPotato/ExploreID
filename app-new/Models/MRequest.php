<?php

namespace App\Models;

use CodeIgniter\Model;

class MRequest extends Model
{
	protected $table = "request";
	public function getRequest($id = false)
	{
		if ($id === false) {
			return $this->table('request')
				->orderBy('request_id', 'ASC')
				->get();
		} else {
			return $this->table('request')
				->where('request_id', $id)
				->get()
				->getRowArray();
		}
	}
	public function saveRegRequest($data)
	{
		$query = $this->db->table('request')->insert($data);
		return $query;
	}
	public function getrequest_id($id=false)
	{
		return $this->db->table('request')
						->where('request_id', $id)
						->get()
						->getResultArray();
	}
	public function saveEditRequest($data, $datatab , $id, $tab)
	{
		$query = $this->db->table('request')->update($data, ['request_id' => $id]);
		$query = $this->db->table($tab)->insert($datatab);
		$insert_id = $this->db->insertID();
		$img = ROOTPATH.'database/request/request_'.$id.'.jpg';
		$newimg = ROOTPATH.'database/'.$tab.'/'.$tab.'_'.$insert_id.'.jpg';
		if (file_exists($img))
		{
			rename($img, $newimg); 
		}
		return $query;
	}
	
	public function justEditRequest($data, $id)
	{
		$query = $this->db->table('request')->update($data, ['request_id' => $id]);
		return $query;
	}


	public function delete_data($table, $key, $id)
	{
		return $this->db->table($table)->delete([$key=>$id]);
	}
	public function delete_dataandimage($table, $key, $id)
	{
		$img = ROOTPATH.'database/request/request_'.$id.'.jpg';
		if (file_exists($img))
		{
		unlink( $img);
		}
		return $this->db->table($table)->delete([$key=>$id]);
	}

}


