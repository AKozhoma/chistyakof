<?php

function id_generate()
{
    if (isset($_GET['link'])) {
        $db = new mysql;
        $sql = "SELECT id FROM content_" . LANG . " WHERE _link = '" . $_GET['link'] .
            "' LIMIT 1";
        $result = $db->select($sql);
        if ($result) {
            return $result[0]['id'];
        } else {
            return false;
        }
    } elseif (empty($_GET['id'])) {
        $db = new mysql;
        $result = $db->select('SELECT id FROM content_' . LANG .
            ' WHERE parent=0 order by weight LIMIT 1');
        if ($result) {
            return $result[0]['id'];
        } else {
            return false;
        }
    } else {
        return intval($_GET['id']);
    }
    return false;
}

function link_generate()
{
    if (!isset($_GET['link'])) {
        $mysql = new mysql();
        $result = $mysql->select('SELECT _link FROM content_ru WHERE parent=0 order by weight LIMIT 1');
        if ($result) {
            return $result[0]['_link'];
        } else {
            return false;
        }
    }
    return $_GET['link'];
}

function get_lang($default_lang = 'ru')
{
    if (!isset($_GET['lang'])) {
        $lang = $default_lang;
    } else {
        $lang = $_GET['lang'];
    }
    return $lang;
}

function redirect_on_error()
{
    header('Location: ' . REDIRECT_ON_ERROR);
    exit;
}

?>