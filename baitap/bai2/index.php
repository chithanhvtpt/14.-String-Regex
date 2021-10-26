<?php
function PatternEmail1($str)
{
    $regex = '/^[_a-z0-9]{6,}$/';
    if(preg_match($regex, $str)) {
        echo 'Hợp lệ!!' . '<br>';
    }else {
        echo 'Không hợp lệ!!' . '<br>';
    }
}
PatternEmail1('123abc_');
PatternEmail1('_abc123');
PatternEmail1('123456');
PatternEmail1('abcdefg');
PatternEmail1('.@');
PatternEmail1('12345');
PatternEmail1('1234_');
PatternEmail1('abcde');