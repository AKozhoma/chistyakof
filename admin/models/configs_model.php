<?php

class Configs_model extends Model
{
    function __construct()
    {
        parent:: __construct();
    }
    
    function change_password($old, $new, $rtr)
    {
        if ($old == '' or $new == '' or $rtr == '') {
            return 1;
        } else {
            if ($new != $rtr) {
                return 2;
            }
        }

        $md5_old = md5($old);
        $md5_new = md5($new);

        $result = $this->db->select("SELECT Id FROM `users` WHERE (pass='$md5_old')");
        if (empty($result[0]['Id'])) {
            return 3;
        }

        $what = array('pass' => $md5_new);
        $where = array('Id' => $result[0]['Id']);
        $this->db->update("users", $what, $where);

        return 0;
    }
}

?>