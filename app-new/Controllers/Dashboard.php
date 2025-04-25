<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use DBConnection;
use Psr\Log\LoggerInterface;
use App\Models\MProvince;
use App\Models\MClothes;
use App\Models\MHouse;
use App\Models\MDance;
use App\Models\MSong;
use App\Models\MInstrument;
use App\Models\MLandmark;
use App\Models\MFood;
use App\Models\MStory;
use App\Models\MTaboo;


class Dashboard extends Controller
{
    public function __construct()
    {
        $this->province = new MProvince();
        $this->clothes = new MClothes();
        $this->house = new MHouse();
        $this->dance = new MDance();
        $this->song = new MSong();
        $this->instrument = new MInstrument();
        $this->landmark = new MLandmark();
        $this->food = new MFood();
        $this->story = new MStory();
        $this->taboo = new MTaboo();
    }

    public function index()
    {
        $stat = new MProvince();
        $data = [
            'province' => $stat->stats('province'),
            'clothes' => $stat->stats('clothes'),
            'house' => $stat->stats('house'),
            'dance' => $stat->stats('dance'),
            'song' => $stat->stats('song'),
            'instrument' => $stat->stats('instrument'),
            'landmark' => $stat->stats('landmark'),
            'food' => $stat->stats('food'),
            'story' => $stat->stats('story'),
            'taboo' => $stat->stats('taboo'),
            'new_request' => $stat->reqStats('New'),
            'priority_request' => $stat->reqStats('Priority'),
            'accepted_request' => $stat->reqStats('Accepted'),
            'settings' =>$stat->settingsview(),
            'content' => 'admin/dashboard',
        ];
        $data['content'] = 'admin/dashboard';
        return view('layout/v_wrapper', $data);
    }

    public function saveSettings()
    {
        extract($_POST);
        $data["settings_value"]= $province_id;
        print_r($data);
        $savedata = $this->province->saveEditSettings($data);
        if ($savedata) {
        session()->setFlashdata('success', 'Weekly Featured sudah berubah');
          return redirect()->to(base_url() . '/dashboard');
         } else {
            session()->setFlashdata('warning', 'Weekly Featured gagal diubah');
          return redirect()->to(base_url() . '/dashboard');
          }
    }
}
