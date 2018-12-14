<?php

/**
 * Description of AS400_jdbc_test
 *
 * @author it
 */
class As400_ttrpf {

    public function __construct() {
        $this->load->library('JDBM');
    }

    public function insertData(array $data) {
        $jar_name = 'model';
        $table = 'jdbc_test';
        $sql = $this->db->insert_string($table, $data);
        return $this->jdbm->Insert($jar_name, '"'.$sql.'"');
    }

}
