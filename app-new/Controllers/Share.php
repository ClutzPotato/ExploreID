<?php

namespace App\Controllers;

use CodeIgniter\Files\File;
use App\Models\UploadModel;

class Share extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        session()->setFlashdata('none', '');
        return view('guest/share');
    }

    public function __construct()
    {
        $this->uploaded = new UploadModel();
    }
    public function upload()
    {
        $validationRule = [
            'fileToUpload' => [
                'label' => 'Image File',
                'rules' => 'uploaded[fileToUpload]'
                    . '|is_image[fileToUpload]'
                    . '|mime_in[fileToUpload,image/jpg,image/jpeg,image/png]'
                    . '|max_size[fileToUpload,10000]'
                // . '|max_dims[fileToUpload,1024,768]',
            ],
        ];
        if (!$this->validate($validationRule)) {

            session()->setFlashdata('error', $this->validator->getErrors());
            return view('guest/share');
        }

        $img = $this->request->getFile('fileToUpload');

        if (!$img->hasMoved()) {
            $data = [
                'request_id' => NULL,
                'request_name' => $this->request->getPost('request_name'),
                'request_email' => $this->request->getPost('request_email'),
                'request_province_id' => $this->request->getPost('request_province_id'),
                'request_table' => $this->request->getPost('request_table'),
                'request_title' => $this->request->getPost('request_title'),
                'request_info' => $this->request->getPost('request_info'),
                'request_submitted_on' => NULL,
                'request_status' => 'New',
            ];
            $newName = "request_".$this->uploaded->saveUploadData($data) .'.jpg';
            $img->move(ROOTPATH . 'database/request', $newName);
            // $filepath = WRITEPATH . 'uploads/' . $img->store('request/', $this->uploaded->saveUploadData($data) . '.jpg');
            session()->setFlashdata('success', 'Thanks for sharing. Our moderators will review your contributions shortly.');
            return view('guest/share');
        }
        session()->setFlashdata('success', 'Uploaded file has already been processed.');
        return view('guest/share');
    }
}
