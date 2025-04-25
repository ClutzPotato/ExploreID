<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use DBConnection;
use Psr\Log\LoggerInterface;
use App\Models\MRequest;

class Request extends Controller
{   
    public function __construct(
    ) {
        $this->request1 = new MRequest();
    }
    
    public function index()
    {
        $modelrequest1 = new MRequest();

        $data['request'] = $modelrequest1->getRequest()->getResult();

        $data['icon'] = 'nav-icon fas fa-book';
        $data['title'] = "Data Tabel ExploreID";
        $data['content'] = 'admin/request';
        return view('layout/v_wrapper', $data);
    }
    
    public function deleteData($id,$table)
    {   
        $tableid = $table."_id";
        
        $DeleteData = $this->request1->delete_dataandimage($table, $tableid, $id);
        
       if ($DeleteData) {
        session()->setFlashdata('success', 'Data Has Been Deleted');
           return redirect()->to(base_url() . '/request');
        } else {
            session()->setFlashdata('warning', 'Data Failed to be Deleted');
            return redirect()->to(base_url() . '/request');
        }
    }

    //uhh sebenarnya savedata ngak kepake karena bukan admin yang add Request, kau boleh hapus kalo ngak perlu
    public function saveData()
    {
        extract($_POST);
        $table = $_POST["table"];
        $postname = (array_keys($_POST));
        $session = session();
        $data = array();
        foreach ($postname as $value){
            if ($value != "table"){
           $data["$value"]= $_POST["$value"];
        }
            }
        $savedata = $this->request1->saveRegRequest($data);
        if ($savedata) {
           session()->setFlashdata('success', 'Registrasi Kelas Berhasil di Entri');
          return redirect()->to(base_url() . '/request');
        } else {
            session()->setFlashdata('warning', 'Registrasi Kelas Gagal di Entri');
           return redirect()->to(base_url() . '/request');
         }
    }

    public function vEditData()
    {
        extract($_POST);
        $data = $this->request1->getrequest_id($id);
        echo json_encode($data);
    }

    public function saveEditData()
    {
        extract($_POST);
        $tab = $_POST["request_table"];
        unset($_POST['buttontype']);
        $postname = (array_keys($_POST));
        $session = session();
        $data = array();
        print_r($_POST);
        foreach ($postname as $value){
           $data["$value"]= $_POST["$value"];
    }
        if ($tab != 'taboo'){
        $datatab["province_id"] = $data["request_province_id"];
        $datatab[$tab."_name"] = $data["request_title"];
        $datatab[$tab."_info"] = $data["request_info"];
        }
        else {
            $datatab["province_id"] = $data["request_province_id"];
            $datatab[$tab."_info"] = $data["request_info"];
        }
        if ($buttontype =='accept'){
            $data["request_status"] = 'Accepted';
            $editdata = $this->request1->saveEditRequest($data,$datatab, $request_id, $tab);
        }
        if ($buttontype =='edit'){
            $editdata = $this->request1->justEditRequest($data, $request_id);
        }
        if ($editdata) {
          session()->setFlashdata('success', 'Update Kelas Berhasil di Entri');
           return redirect()->to(base_url() . '/request');
        } else {
            session()->setFlashdata('warning', 'Update Kelas Gagal di Entri');
            return redirect()->to(base_url() . '/request');
        }
    }

   
}
