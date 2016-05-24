<?php
    require_once('include/string.inc.php');
    
        if (isset($_GET['str']))
        {
            $str = $_GET['str'];
            echo (isIdentifier($str));
        }
        else
        {
            echo 'An empty value identifier';
        }