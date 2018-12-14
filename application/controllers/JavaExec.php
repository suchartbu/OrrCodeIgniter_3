<?php
/**
 * ตัวอย่างการใช้โปรแกรมจาวาเพื่อจัดการข้อมูล
 * @author suchart bunhachirat
 */
class JavaExec extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('Java');
    }

    public function index(){
        $out = $this->java->Exec('HelloWorldApp');
        echo'ตัวอย่างข้อมูลจากโปรแกรมจาวา  ';
        print_r($out);
        $this->load->view('JavaExec_');
    }
}
