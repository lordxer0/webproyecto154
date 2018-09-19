<?php

require_once '../config/db.php';

class Connection
{

    private $con;

    public function __construct()
    {
        $this->con = new mysqli(HOST,USER,PASS,DB);
        $this->con->set_charset(CHARSET);
    }

    public function close()
    {
        $this->con->close();
    }

    public function query($sql)
    {

        $rs = $this->con->query($sql);
        if ($rs->num_rows>0) {
            return $rs;
        } else {
            return null;
        }

    }
    public function execute($sql)
    {
        $res = $this->con->query($sql);
        if ($res == 1) {
            return true;
        } else {
            return false;
        }
    }

}

?>