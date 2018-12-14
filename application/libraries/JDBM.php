<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * คลาสคำสั่งเกี่ยวกับฐานข้อมูลโดย JAVA JDBC
 * java -cp model.jar model.Insert
 * @author suchart bunhachirat
 */
class JDBM {

    private $ModelsPath = '/var/www/html/OrrCodeIgniter_3/jar/models/';
    private $LibrariesPath = '/var/www/html/OrrCodeIgniter_3/jar/libraries/';
    private $JarDriver = 'jt400';

    public function __construct() {
        putenv('LANG=en_US.UTF-8');
    }
    /**
     * RUN SQL Command
     * @param type $jar_name
     * @param type $sql
     * @return array
     */
    public function execInsert($jar_name , $sql) {
        $output = NULL;
        echo $file_path = 'java -cp ' . $this->LibrariesPath . $this->JarDriver .'.jar:' . $this->ModelsPath . $jar_name .'.jar model.Insert ' . $sql;
        exec($file_path, $output);
        return $output;
    }

}
