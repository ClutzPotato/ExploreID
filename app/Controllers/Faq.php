<?php

namespace App\Controllers;

class Faq extends BaseController
{
    public function index()
    {
        echo view('guest/faq');
    }
}
