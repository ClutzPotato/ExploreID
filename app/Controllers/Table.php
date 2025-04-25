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


class Table extends Controller
{   
    public function __construct(
    ) {
        $this->province = new MProvince();
        $this->clothes = new MClothes();
        $this->house = new MHouse();
        $this->dance = new MDance();
        $this->song = new MSong();
        $this->instrument = new MInstrument ();
        $this->landmark = new MLandmark();
        $this->food = new MFood();
        $this->story = new MStory();
        $this->taboo = new MTaboo();
    }
    
    public function index()
    {
        extract($_GET);
        $modelprovince = new MProvince();
        $modelclothes = new MClothes();
        $modelhouse = new MHouse();
        $modeldance = new MDance();
        $modelsong = new MSong();
        $modelinstrument = new MInstrument();
        $modellandmark = new MLandmark();
        $modelfood = new MFood();
        $modelstory = new MStory();
        $modeltaboo = new MTaboo();

        $data['province'] = $modelprovince->getProvince()->getResult();
        $data['clothes'] = $modelclothes->getClothes()->getResult();
        $data['house'] = $modelhouse->getHouse()->getResult();
        $data['dance'] = $modeldance->getDance()->getResult();
        $data['song'] = $modelsong->getSong()->getResult();
        $data['instrument'] = $modelinstrument->getInstrument()->getResult();
        $data['landmark'] = $modellandmark->getLandmark()->getResult();
        $data['food'] = $modelfood->getFood()->getResult();
        $data['story'] = $modelstory->getStory()->getResult();
        $data['taboo'] = $modeltaboo->getTaboo()->getResult();

        $data['icon'] = 'nav-icon fas fa-book';
        $data['title'] = "Data Tabel ExploreID";
        $data['table'] = $table;
        
        $data['content'] = 'admin/table';
        return view('layout/v_wrapper', $data);
    }

    public function deleteData($id,$table)
    {   $tableid = $table."_id";
        $DeleteData = $this->$table->delete_data($table, $tableid, $id);
       if ($DeleteData) {
        session()->setFlashdata('success', 'Data Has Been Deleted');
           return redirect()->to(base_url() . '/table?table='.$table);
        } else {
            session()->setFlashdata('warning', 'Data Failed to be Deleted');
            return redirect()->to(base_url() . '/table?table='.$table);
        }
    }

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
        if ($table=="province"){
            $savedata = $this->$table->saveRegProvince($data);
        }
        if ($table=="clothes"){
            $savedata = $this->$table->saveRegClothes($data);
        }
        if ($table=="house"){
            $savedata = $this->$table->saveRegHouse($data);
        }
        if ($table=="dance"){
            $savedata = $this->$table->saveRegDance($data);
        }
        if ($table=="song"){
            $savedata = $this->$table->saveRegSong($data);
        }
        if ($table=="instrument"){
            $savedata = $this->$table->saveRegInstrument($data);
        }
        if ($table=="landmark"){
            $savedata = $this->$table->saveRegLandmark($data);
        }
        if ($table=="food"){
            $savedata = $this->$table->saveRegFood($data);
        }
        if ($table=="story"){
            $savedata = $this->$table->saveRegStory($data);
        }
        if ($table=="taboo"){
            $savedata = $this->$table->saveRegTaboo($data);
        }
        if ($savedata) {
           session()->setFlashdata('success', 'Registrasi Kelas Berhasil di Entri');
          return redirect()->to(base_url() . '/table?table='.$table);
        } else {
            session()->setFlashdata('warning', 'Registrasi Kelas Gagal di Entri');
           return redirect()->to(base_url() . '/table?table='.$table);
         }
    }

    public function vEditData()
    {
        $id = service('request')->getPost('id');
        $table = service('request')->getPost('table');
        if ($table=="province"){
            $data = $this->$table->getprovince_id($id);
        }
        if ($table=="clothes"){
            $data = $this->$table->getclothes_id($id);
        }
        if ($table=="house"){
            $data = $this->$table->gethouse_id($id);
        }
        if ($table=="dance"){
            $data = $this->$table->getdance_id($id);
        }
        if ($table=="song"){
            $data = $this->$table->getsong_id($id);
        }
        if ($table=="instrument"){
            $data = $this->$table->getinstrument_id($id);
        }
        if ($table=="landmark"){
            $data = $this->$table->getlandmark_id($id);
        }
        if ($table=="food"){
            $data = $this->$table->getfood_id($id);
        }
        if ($table=="story"){
            $data = $this->$table->getstory_id($id);
        }
        if ($table=="taboo"){
            $data = $this->$table->gettaboo_id($id);
        }
        echo json_encode($data);
    }
    public function saveEditData()
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
    if ($table=="province"){
        $editdata = $this->$table->saveEditProvince($data, $province_id);
    }
    if ($table=="clothes"){
        $editdata = $this->$table->saveEditClothes($data, $clothes_id);
    }
    if ($table=="house"){
        $editdata = $this->$table->saveEditHouse($data, $house_id);
    }
    if ($table=="dance"){
        $editdata = $this->$table->saveEditDance($data, $dance_id);
    }
    if ($table=="song"){
        $editdata = $this->$table->saveEditSong($data, $song_id);
    }
    if ($table=="instrument"){
        $editdata = $this->$table->saveEditInstrument($data, $instrument_id);
    }
    if ($table=="landmark"){
        $editdata = $this->$table->saveEditLandmark($data, $landmark_id);
    }
    if ($table=="food"){
        $editdata = $this->$table->saveEditFood($data, $food_id);
    }
    if ($table=="story"){
        $editdata = $this->$table->saveEditStory($data, $story_id);
    }
    if ($table=="taboo"){
        $editdata = $this->$table->saveEditTaboo($data, $taboo_id);
    }
        if ($editdata) {
            session()->setFlashdata('success', 'Update Kelas Berhasil di Entri');
            return redirect()->to(base_url() . '/table?table='.$table);
        } else {
            session()->setFlashdata('warning', 'Update Kelas Gagal di Entri');
            return redirect()->to(base_url() . '/table?table='.$table);
        }
    }
   
}
