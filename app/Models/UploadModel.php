<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class UploadModel extends Model
{
	protected $table = "request";
	public function saveUploadData($data)
	{
		$this->db->table('request')->insert($data);
        $insert_id = $this->db->insertID();
		return $insert_id;
	}
}
