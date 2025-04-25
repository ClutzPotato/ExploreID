<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use DBConnection;
use Psr\Log\LoggerInterface;
use App\Models\MHome;

class Home extends BaseController
{
    public function index()
    {
        $modelhome = new MHome();
        $data['clothes'] = $modelhome->getclothes();
        $data['dance'] = $modelhome->getdance();
        $data['landmark'] = $modelhome->getlandmark();
        $data['food'] = $modelhome->getfood();
        $data['story'] = $modelhome->getstory();
        echo view('guest/index',$data);
    }
}
