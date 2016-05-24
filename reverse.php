<?php
    require_once('include/common.inc.php');
    if (isset($_GET['str']))
    {
        $str = $_GET['str'];
        echo(revers($str));    
    }
    else
    {
       echo('Incorrect input');
    }