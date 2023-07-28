<?php
class Connect
{
    var $_usr;
    var $_pwd;
    var $_srv;
    var $_db;
    var $_con;

    function __construct()
    {
        $this->_usr = "mysql";
        $this->_pwd = "mysql";
        $this->_srv = "localhost";
        $this->_db = "lesfrichesfrancaises";
        $this->open();
    }

    function open()
    {
        $this->_con = new mysqli($this->_srv, $this->_usr, $this->_pwd, $this->_db);
    }

    function close()
    {
        $this->_con->close();
    }

    function selectAll()
    {
        $sql = "SELECT * FROM test";
        $r = $this->_con->query($sql);
        return $r;
    }
}
