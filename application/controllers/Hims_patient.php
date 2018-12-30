<?php

/**
 * กำหนดที่เก็บไฟล์ Model ที่ใช้งาน
 */
if (defined('BASEPATH')) {
    require_once(APPPATH . 'models/jdbs/TRHPFV5.php');
} else {
    exit('No direct script access allowed');
}

/**
 * Description of Hims_patient
 *
 * @author it
 */
class Hims_patient extends CI_Controller {

    private $Trhpfv5 = null;

    public function __construct() {
        parent::__construct();
        $this->Trhpfv5 = new \model\TRHPFV5('it', 'it');
    }

    public function index() {
        echo 'Index of Hims_patient ';
    }
    
    /**
     * ปรับปรุงให้ส่งข้อมูลกลับมาเป็น Json
     */
    public function Select(){
        print_r($this->Trhpfv5->SelectPatient());
    }

}
