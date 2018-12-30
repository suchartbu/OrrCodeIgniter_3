<?php

namespace orr;

if (defined('BASEPATH')) {
    /**
     * require_once(APPPATH . 'models/Jdb_ttrpf.php');
     */
} else {
    exit('No direct script access allowed');
}

/**
 * คลาสคำสั่งเกี่ยวกับฐานข้อมูลโดย JAVA JDBC
 * - กำหนด Model ที่ใช้งาน
 * 
 * java -cp model.jar model.Insert
 * @author suchart bunhachirat
 */
class Jdb {

    private $ModelsPath = '/var/www/html/OrrCodeIgniter_3/jar/models/';
    private $LibrariesPath = '/var/www/html/OrrCodeIgniter_3/jar/libraries/';
    protected $jarModel = 'jdb';
    protected $JarDriver = NULL;
    protected $user = NULL;
    protected $passwd = NULL;
    protected $url = NULL;
    

    /**
     * กำหนดรหัสอักขระเริ่มต้น
     */
    public function __construct() {
        putenv('LANG=en_US.UTF-8');
    }

    /**
     * เรียกใช้ไฟล์ jar function สำหรับการ Insert Update Delete
     * @param string $sql
     * @return string json
     */
    public function execUpdate($sql) {
        $output = NULL;
        echo $file_path = 'java -cp ' . $this->LibrariesPath . $this->JarDriver . '.jar:' . $this->ModelsPath . $this->jarModel . '.jar execUpdate ' . '"' . $sql . '" ' . '"' . $this->user . '" ' . '"' . $this->passwd . '" ' . '"' . $this->url . '" ';
        exec($file_path, $output);
        return $output;
    }

    /**
     * เรียกใช้ไฟล์ jar function สำหรับการ Select
     * @param string $sql
     * @return string json
     */
    public function execQuery($sql) {
        $output = NULL;
        echo $file_path = 'java -cp ' . $this->LibrariesPath . $this->JarDriver . '.jar:' . $this->ModelsPath . $this->jarModel . '.jar execQuery ' . '"' . $sql . '" ' . '"' . $this->user . '" ' . '"' . $this->passwd . '" ' . '"' . $this->url . '" ';
        exec($file_path, $output);
        return $output;
    }

}
