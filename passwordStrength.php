<?php    
    require_once('include/common.inc.php');
    if (isset($_GET['str']))
    {
        $str = $_GET['str'];
        echo(passwordStrength($str));    
    }
    else
    {
       echo('Введите строку.');
    }
   