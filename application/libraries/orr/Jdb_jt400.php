<?php

namespace orr;
if (defined('BASEPATH')) {
    require_once('Jdb.php');
} else {
    exit('No direct script access allowed');
}

/**
 * คลาสคำสั่งเกี่ยวกับฐานข้อมูลโดย JAVA JDBC jt400
 * java -cp jdb.jar execUpdate
 * @author suchart bunhachirat
 */
class Jdb_jt400 extends \orr\Jdb {
    public function __construct($user,$passwd,$db_url) {
        parent::__construct();
        $this->JarDriver='jt400';
        $this->user = $user;
        $this->passwd = $passwd;
        $this->url = 'jdbc:as400://'.$db_url;
    }
}
