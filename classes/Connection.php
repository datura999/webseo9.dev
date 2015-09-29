<?php

class Connection {
    private  $connection;

    function __construct($host, $user, $password, $dbName) {
        $this->connection = mysql_connect($host, $user, $password);
        mysql_select_db($dbName, $this->connection);
    }

    public function query($query) {
        $result = mysql_query($query, $this->connection);

        return $result;
    }

    public function selectAll($query) {
        $resultArr = array();

        $result = mysql_query($query, $this->connection);

        if($result) {
            while($row = mysql_fetch_assoc($result)) {
                $resultArr[] = $row;
            }
        }

        return $resultArr;
    }

    public function close() {
        mysql_close($this->connection);
    }

    function __destruct() {
        mysql_close($this->connection);
    }
}