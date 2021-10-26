<?php
function PatternAccount($str)
{
    $regex = '/^[CAP]{1,1}[0-9]{4,4}[GHIKLM]{1,1}$/';
    if(preg_match($regex, $str)) {
        echo 'Hợp lệ!!' . '<br>';
    }else {
        echo 'Không hợp lệ!!' . '<br>';
    }
}
PatternAccount('C0318G');
PatternAccount('M0318G');
PatternAccount('P0323A');
