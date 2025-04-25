<?php

namespace App\Models;

use CodeIgniter\Model;

class MSong extends Model
{
	protected $table = "song";
	public function getSong($id = false)
	{
		if ($id === false) {
			return $this->table('song')
				->orderBy('song_id', 'ASC')
				->get();
		} else {
			return $this->table('song')
				->where('song_id', $id)
				->get()
				->getRowArray();
		}
	}
	public function saveRegSong($data)
	{
		$query = $this->db->table('song')->insert($data);
		return $query;
	}
	public function getsong_id($id=false)
	{
		return $this->db->table('song')
						->where('song_id', $id)
						->get()
						->getResultArray();
	}
	public function saveEditSong($data, $id)
	{
		$query = $this->db->table('song')->update($data, ['song_id' => $id]);
		return $query;
	}
	public function delete_data($table, $key, $id)
	{
		$img = ROOTPATH.'database/song/song_'.$id.'.jpg';
		if (file_exists($img))
		{
		unlink( $img);
		}
		return $this->db->table($table)->delete([$key=>$id]);
	}

}


