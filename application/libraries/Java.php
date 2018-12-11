<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * ชุดคำสั่งเพื่อเรียกใช้โปรแกรมจาวา
 * @author suchart bunhachirat
 */
class Java {

    public function Exec($file_name) {
        $file_name = '/var/www/html/OrrCodeIgniter_3/java/'.$file_name . '.jar';
        $output = NULL;
        putenv('LANG=en_US.UTF-8');
        exec('java -jar ' . $file_name, $output);
        return $output;
    }

}
