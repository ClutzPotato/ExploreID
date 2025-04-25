<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class ContentModel extends Model
{
        public function getContent($table, $id)
        {
                $db = \Config\Database::connect();
                $builder = $db->table($table);

                return $builder->where(['province_id' => $id])->get();
        }
}
