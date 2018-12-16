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
    protected $JarDriver = 'jt400';

    public function __construct() {
        putenv('LANG=en_US.UTF-8');
    }

    public function execUpdate($sql) {
        $output = NULL;
        echo $file_path = 'java -cp ' . $this->LibrariesPath . $this->JarDriver . '.jar:' . $this->ModelsPath . $this->jarModel . '.jar execUpdate ' . '"' . $sql . '"';
        exec($file_path, $output);
        return $output;
    }
    
    public function execQuery($sql) {
        $output = NULL;
        echo $file_path = 'java -cp ' . $this->LibrariesPath . $this->JarDriver . '.jar:' . $this->ModelsPath . $this->jarModel . '.jar execQuery ' . '"' . $sql . '"';
        exec($file_path, $output);
        return $output;
    }

}
