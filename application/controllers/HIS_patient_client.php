<?php

if (defined('BASEPATH')) {
    //require_once(APPPATH . 'models/jdbs/HIMs_REG.php');
} else {
    exit('No direct script access allowed');
}

/**
 * Description of HIS_patient
 * ทะเบียนประวัติผู้ป่วย JsonRPC
 * @author suchart bunhachirat
 */
class HIS_patient_client extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->library('JsonRpc/ClientRPC');
        echo 'HIS_patient_client';
    }
}
