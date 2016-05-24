<?php
    function last($str)
    {   
       $lastChar = substr($str, strlen($str) - 1);
       return $lastChar;
    }   

    function withoutLast($str)
    {
        $strWithoutLast = substr($str, 0, strlen($str) - 1);
        return $strWithoutLast;
    }

    function revers($str)
    {
        $reverseStr = '';
        $length = strlen($str);
        for($i = $length - 1; $i >= 0; $i--)
        {
            $reverseStr = $reverseStr . $str[$i];
        }   
        return $reverseStr;
    }

    function firstStrChar($str)
    {
        $strFirstChar = substr($str, 0, 1);
        return $strFirstChar;
    }

    function isIdentifier($str)
    {
        $upperCaseArr = range('A', 'Z');
        $lowerCaseArr = range('a', 'z');
        $numArr = range('0', '9');
        $letters = array_merge($upperCaseArr, $lowerCaseArr);
        $validSymbols = array_merge($letters, $numArr);
        $arr = str_split($str);
        $isValidStr = 'No. Identifier starts with a number';
        $key = array_search($str{0}, $numArr);
        if ($key == 0)
        {
            $result = array_intersect($arr, $validSymbols);
            if (count($result) == count($arr))
            {
                $isValidStr = 'Yes, all ok.';
            }    
            else
            {
                $isValidStr = 'No, there are invalid characters';
            }                
        }
        return $isValidStr;
    }

    function isSetStr($str)
    {
        if (isset($_GET[$str]))
        { 
            $setStr = $_GET[$str];
        }
        else
        {   
            echo('Error');
        }
    }
    
    function removeExtraBlanks($str)
    {
        trim($str);
        $arr = str_split($str);
        $processedArr = array();
        for ($i=0; $i < (strlen($str) - 1); $i++)
        {
            if (($arr[$i] == ' ') && ($arr[$i+1] == ' '))
            {}
            else
            {
                array_push($processedArr, $arr[$i]);
            }
        }
        $lastSymbol = substr($str, -1);
        array_push($processedArr, $lastSymbol); 
        $processedStr = implode($processedArr);
        return $processedStr;
    }
    
    function passwordStrength($str)
    {
        $n = 0;
        $arr = str_split($str);
        $upperCaseArr = range('A', 'Z');
        $lowerCaseArr = range('a', 'z');
        $numArr = range('0', '9');
        $letters = array_merge($upperCaseArr, $lowerCaseArr);
        $validSymbols = array_merge($letters, $numArr);
        $result = array_intersect($arr, $validSymbols);
        if (count($result) == count($arr))
        {
            $n = 4 * strlen($str);
            echo $n, ' - длина строки умножить на 4   ';
            $result = array_intersect($arr, $numArr);
            if (count($arr) != count($result))
            {
                $result = array_intersect($arr, $upperCaseArr);
                $n = $n +((strlen($str) - count($result)) * 2);
                echo $n, ' - считаем большие символы   ';
                $result = array_intersect($arr, $lowerCaseArr);
                $n = $n +((strlen($str) - count($result)) * 2);
                echo $n, ' - считаем малые символы   ';
            }
            $result = array_intersect($arr, $numArr);
            $n = $n +(count($result) * 4);
            echo $n, ' - считаем цифры  ';
            $result = array_intersect($arr, $letters);
            if (count($result) == count($arr))
            {
                $n = $n - count($arr);
                echo $n, ' - вычитаем если состоит только из букв  ';
            }
            $result = array_intersect($arr, $numArr);
            if (count($result) == count($arr))
            {
                $n = $n - count($arr);
                echo $n, ' - вычитаем цифры   ';
            }
            for($i = 0; $i < count($arr); $i++)
            {
                if ((count($result)) > 1)
                {
                    $entry = substr_count($str, $usedSymbols);
                    if ($entry != 0)
                    {
                        $n = $n - $entry;
                        echo $n, ' - после того как уберем повторяющиеся символы   ';
                    }   
                }
                $usedSymbols = array_push($usedSymbols, $arr[i]);               
            }   
        }
        return $n;  
    }