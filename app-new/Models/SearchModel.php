<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class SearchModel extends Model
{
	public function getSearch($table, $like)
	{
        $db = \Config\Database::connect();
        $builder = $db->table($table);
        
        return $builder->like($table . '_name', $like)->orLike($table . '_info', $like)->get();
	}
}

