<?php
    require_once('string.inc.php');
    if (isset($_GET['str']))
    {
        $str = $_GET['str'];
        echo(revers($str));    
    }
    else
    {
       echo('str not found');
    }