<?php

namespace App\Models;

use CodeIgniter\Model;

class MStory extends Model
{
	protected $table = "story";
	public function getStory($id = false)
	{
		if ($id === false) {
			return $this->table('story')
				->orderBy('story_id', 'ASC')
				->get();
		} else {
			return $this->table('story')
				->where('story_id', $id)
				->get()
				->getRowArray();
		}
	}
	public function saveRegStory($data)
	{
		$query = $this->db->table('story')->insert($data);
		return $query;
	}
	public function getstory_id($id=false)
	{
		return $this->db->table('story')
						->where('story_id', $id)
						->get()
						->getResultArray();
	}
	public function saveEditStory($data, $id)
	{
		$query = $this->db->table('story')->update($data, ['story_id' => $id]);
		return $query;
	}
	public function delete_data($table, $key, $id)
	{
		$img = ROOTPATH.'database/story/story_'.$id.'.jpg';
		if (file_exists($img))
		{
		unlink( $img);
		}
		return $this->db->table($table)->delete([$key=>$id]);
	}

}


