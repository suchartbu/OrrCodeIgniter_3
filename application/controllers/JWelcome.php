<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * การแสดงผลข้อมูลจากโปรแกรมที่เขียนด้วยภาษาจาวา
 * @author suchart bunhachirat
 */
class JWelcome extends CI_Controller{
    /**
     * Inbex Page for this controller.
     */
    public function index(){
        $this->load->view('welcome_message');
    }
}
