<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContentModel;

class Content extends Controller
{
    public function __construct()
    {
        $this->content = new ContentModel();
    }
    public function index()
    {
        $model = new ContentModel();
        $id = $this->request->getGet('prov');
        if ($id == '') {
            return view('guest/index');
        } else {
            $data = [
                'clothes' => $model->getContent('clothes', $id)->getResult(),
                'dance' => $model->getContent('dance', $id)->getResult(),
                'food' => $model->getContent('food', $id)->getResult(),
                'house' => $model->getContent('house', $id)->getResult(),
                'instrument' => $model->getContent('instrument', $id)->getResult(),
                'landmark' => $model->getContent('landmark', $id)->getResult(),
                'province' => $model->getContent('Province', $id)->getResult(),
                'song' => $model->getContent('song', $id)->getResult(),
                'story' => $model->getContent('story', $id)->getResult(),
                'taboo' => $model->getContent('taboo', $id)->getResult(),
            ];
            return view('guest/content', $data);
        }
    }
}
