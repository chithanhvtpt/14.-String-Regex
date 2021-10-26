<?php
function PatternNumber($str)
{
//    $regex = '/^[0]{1,1}[0-9]{9,9}$/';
    $regex = '/^0[0-9]{9}$/';
    if (preg_match($regex, $str)) {
        echo 'Hợp lệ!!'. '<br>';
    } else {
        echo 'Không hợp lệ!!';
    }
}
PatternNumber('0945708090');
PatternNumber('0456123889');
PatternNumber('1456123889');
