<?php

class User_session
{

    private $logged = false;

    public function __construct()
    {
        global $dbhost;
        global $dbname;
        global $dbuser;
        global $dbpass;

        $this->dbhandle = mysql_connect(DBHOST, DBUSER, DBPASS) or die("MySQL error connect to Data Base!" ); 

        mysql_select_db(DBNAME, $this->dbhandle);
    }

    public function login($strUsername, $strPlainPassword)
    {
        $strMD5Password = md5($strPlainPassword);
        $stmt = "select id FROM users WHERE username = '$strUsername' AND pass ='$strMD5Password'";
        $result = mysql_query($stmt);
        if (mysql_num_rows($result) > 0) {
            $this->logged = true;
        }
    }

    public function is_logged_in()
    {
        return ($this->logged);
    }
}

?>