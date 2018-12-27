<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of json_test
 *
 * @author it
 */
class json_test extends CI_Controller {

    public function index() {
        $array_json = ['Status' => 'Success', 'Data' => [['id' => 1, 'name' => 'ทดสอบ', 'list' => [1, 2, 3]]], ['id' => 2, 'name' => 'ตัวอย่าง', 'list' => [4, 5, 6]], ['id' => 3, 'name' => 'ตัวอย่าง3', 'list' => [4, 5, 6]]];
        //print_r($array_json);
        header('Content-Type: application/json');
        echo json_encode($array_json,JSON_UNESCAPED_UNICODE);
        //$str_json = '{"Status":"Success","Data":[{"id":1,"name":"ทดสอบ","list":[1,2,3]}],"0":{"id":2,"name":"ตัวอย่าง","list":[4,5,6]},"1":{"id":3,"name":"ตัวอย่าง3","list":[4,5,6]}}';
        //print_r(json_decode($str_json,TRUE));
    }

}
