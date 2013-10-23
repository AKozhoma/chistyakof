<?php

class mysql
{
    private $dbhost;
    private $dbname;
    private $dbuser;
    private $dbpass;
    private $col_conn;
    private static $dblink;
    private static $col_connections;
    public static $count;

    function __construct()
    {
        mysql::$count = 1;


        $this->dbhost = DBHOST;
        $this->dbname = DBNAME;
        $this->dbpass = DBPASS;
        $this->dbuser = DBUSER;

        if (!isset(mysql::$dblink)) {
            mysql::$dblink = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass) or
                die("MySQL error: --> " . mysql_last_error(mysql::$dblink));
        }

        mysql_select_db($this->dbname);
        mysql::$col_connections = mysql::$col_connections + 1;
    
        mysql_query("set names utf8"); # cp1251
    }

    public function select($sql)
    {
        mysql::$count++;
        $sql = mysql_real_escape_string($sql);
        $sql = stripslashes($sql);
        $hRes = mysql_query($sql, mysql::$dblink);
        if (!is_resource($hRes)) {
            $err = mysql_error(mysql::$dblink);
            throw new Exception($err);
        }
        $arReturn = array();
        while (($row = mysql_fetch_assoc($hRes))) {
            $arReturn[] = $row;
        }
        return $arReturn;
    }

    public function insert($table, $arFieldValues)
    {
        $fields = array_keys($arFieldValues);
        $values = array_values($arFieldValues);

        $escVals = array();
        foreach ($values as $val) {
            if (!is_numeric($val)) {
                $val = "'" . mysql_real_escape_string($val) . "'";
            }
            $escVals[] = $val;
        }

        $sql = "INSERT INTO $table(";
        $sql .= join(', ', $fields);
        $sql .= ') VALUES(';
        $sql .= join(', ', $escVals);
        $sql .= ')';
        $res = mysql_query($sql);

        return mysql_affected_rows(mysql::$dblink);
    }

    public function update($table, $arFieldValues, $arConditions)
    {

        $arUpdates = array();
        foreach ($arFieldValues as $field => $val) {
            if (!is_numeric($val)) {
                $val = "'" . mysql_real_escape_string($val) . "'";
            }

            $arUpdates[] = "$field = $val";
        }

        $arWhere = array();
        foreach ($arConditions as $field => $val) {
            if (!is_numeric($val)) {
                $val = "'" . mysql_real_escape_string($val) . "'";
            }

            $arWhere[] = "$field = $val";
        }

        $sql = "UPDATE $table SET ";
        $sql .= join(', ', $arUpdates);
        $sql .= ' WHERE ' . join(' AND ', $arWhere);

        $hRes = mysql_query($sql);

        return mysql_affected_rows(mysql::$dblink);
    }
    public function delete($table, $arConditions)
    {

        $arWhere = array();
        foreach ($arConditions as $field => $val) {
            if (!is_numeric($val)) {
                $val = "'" . mysql_real_escape_string($val) . "'";
            }

            $arWhere[] = "$field = $val";
        }

        $sql = "DELETE FROM $table WHERE (" . join(' AND ', $arWhere) . ")";


        $hRes = mysql_query($sql);

        return mysql_affected_rows(mysql::$dblink);
    }
    public function getColConnections()
    {
        return mysql::$col_connections;
    }

}

?>