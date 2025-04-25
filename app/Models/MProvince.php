<?php

namespace App\Models;

use CodeIgniter\Model;

class MProvince extends Model
{
	protected $table = "province";
	public function getProvince($id = false)
	{
		if ($id === false) {
			return $this->table('province')
				->orderBy('province_id', 'ASC')
				->get();
		} else {
			return $this->table('province')
				->where('province_id', $id)
				->get()
				->getRowArray();
		}
	}
	public function saveRegProvince($data)
	{
		$query = $this->db->table('province')->insert($data);
		return $query;
	}
	public function getprovince_id($id = false)
	{
		return $this->db->table('province')
			->where('province_id', $id)
			->get()
			->getResultArray();
	}
	public function saveEditProvince($data, $id)
	{
		$query = $this->db->table('province')->update($data, ['province_id' => $id]);
		return $query;
	}

	public function delete_data($table, $key, $id)
	{
		$img = ROOTPATH.'database/province/province_'.$id.'.jpg';
		if (file_exists($img))
		{
		unlink( $img);
		}
		return $this->db->table($table)->delete([$key => $id]);
	}
	public function stats($table)
	{
		return $this->db->table($table)->countAllResults();
	}
	public function reqStats($type)
	{

		return $this->db->table('request')->where('request_status', $type)->countAllResults();
	}

	public function settingsview()
	{
		return $this->db->table('settings')
		->where('settings_name', 'featured_province')
		->get()
		->getResultArray();
	}

	public function saveEditSettings($data)
	{
		$query = $this->db->table('settings')->update($data, ['settings_name' =>'featured_province']);
		return $query;
	}
}
