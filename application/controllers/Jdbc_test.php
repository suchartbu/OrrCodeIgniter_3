<?php

/**
 * Description of Jdb
 *
 * @author suchart bunhachirat
 */
class Jdbc_test extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('As400_ttrpf');
    }

    public function index() {
        //String sql = "INSERT INTO jdbc_test (id,name) VALUES('5','ทดสอบจาก Java6')";
        $this->As400_ttrpf->insertData(['id'=>15,'name'=>'คำสั่ง insertData']);
    }

}
