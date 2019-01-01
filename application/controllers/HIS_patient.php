<?php

if (defined('BASEPATH')) {
    //require_once(APPPATH . 'models/jdbs/HIMs_REG.php');
} else {
    exit('No direct script access allowed');
}

/**
 * Description of HIS_patient
 * งานที่เกี่ยวกับผู้มารับบริการของโรงพยาบาล
 * @author suchart bunhachirat
 */
class HIS_patient extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('jdbs/HIMs_REG');
    }

    public function index() {
        echo 'index | ';
        try {
            foreach ($this->HIMs_REG->fatchDataPatient() as $value) {
                print $value['hn'] . "\t";
                print $value['fname'] . "\n";
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        } finally {
            echo ' | finally';
        }
    }

}
