<?php

if (defined('BASEPATH')) {
    require_once(APPPATH . 'libraries/orr/JDO.php');
} else {
    exit('No direct script access allowed');
}

/**
 * Description of HIMs_REG
 * ฐานข้อมูลระบบต้อนรับเวชระเบียน HIMs V5
 * @author suchart bunhachirat
 */
class HIMs_REG extends CI_Model {

    private $JDO = NULL;

    public function __construct() {
        parent::__construct();
    }

    public function fatchDataPatient() {
        $this->JDO = new \orr\JDO('orrconn', 'xoylfk', 'jdbc:as400://10.1.99.2/trhpfv5');
        //$sql = "SELECT \"RMSHNREF\", \"RMSNAME\", \"RMSSURNAM\" FROM \"regmasv5pf\" WHERE \"RMSNAME\" LIKE 'สุชา%' AND \"RMSSURNAM\" LIKE 'บุญ%'";
        $sql = "SELECT rmshnref AS hn, rmsname AS fname, rmssurnam AS lname FROM regmasv5pf WHERE RMSNAME LIKE 'โน%' AND RMSSURNAM LIKE 'จิต%'";
        return $this->JDO->query($sql);
    }

}
