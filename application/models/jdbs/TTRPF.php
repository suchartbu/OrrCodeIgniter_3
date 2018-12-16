<?php

namespace model;

if (defined('BASEPATH')) {
    require_once(APPPATH . 'libraries/orr/Jdb.php');
} else {
    exit('No direct script access allowed');
}

/**
 * Description of Jdb_ttrpf
 * ตัวอย่างการใช้งานฐานข้อมูล ttrpf จาก AS400
 * @author suchart bunhachirat
 */
class TTRPF extends \orr\Jdb {

    public function InsertJdbc_test($id,$name) {
        $sql = "INSERT INTO jdbc_test (id,name) VALUES('$id','$name')";
        return $this->execUpdate($sql);
    }
    
    public function UpdateJdbc_test() {
        $sql = "UPDATE jdbc_test SET name='ปรับปรุงจาก UpdataJdbc' WHERE id=19";
        return $this->execUpdate($sql);
    }
    
    public function DelectJdbc_test($id) {
        $sql = "DELETE FROM jdbc_test WHERE id = $id";
        return $this->execUpdate($sql);
    }
    
    public function SelectJdbc_test() {
        $sql = "SELECT * FROM jdbc_test";
        return $this->execQuery($sql);
    }

}
