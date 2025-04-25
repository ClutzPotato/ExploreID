<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SearchModel;

class Search extends BaseController
{
    public function __construct()
    {
        $this->search = new SearchModel();
    }
    public function index()
    {
        $model = new SearchModel();
        $like = $this->request->getGet('search');
        if ($like == '') {
            return view('guest/index');
        } else {
            $data = [
                'clothes' => $model->getSearch('clothes', $like)->getResult(),
                'dance' => $model->getSearch('dance', $like)->getResult(),
                'food' => $model->getSearch('food', $like)->getResult(),
                'house' => $model->getSearch('house', $like)->getResult(),
                'instrument' => $model->getSearch('instrument', $like)->getResult(),
                'landmark' => $model->getSearch('landmark', $like)->getResult(),
                'province' => $model->getSearch('province', $like)->getResult(),
                'song' => $model->getSearch('song', $like)->getResult(),
                'story' => $model->getSearch('story', $like)->getResult(),
                // 'taboo' => $model->getSearch('taboo', $like)->getResult(),
            ];
            return view('guest/search', $data);
        }
    }
}
