<?php
function my_password_hash($password) {
        $rslt_array = array();
        $salt = uniqid();
        $rslt_array = ["hash" => md5($salt.$password), "salt" => $salt];
    return $rslt_array;
    }

function my_password_verify($password, $salt, $hash){
        $verify = md5($salt.$password);

        if ($verify == $hash)
        {
            return true;
        }
        else
        {
            return false;
        }
}

