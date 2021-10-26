<?php
function PatternEmail($str) {
    $regex = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regex, $str)) {
        echo 'Hợp lệ!!'. '<br>';
    }else{
        echo 'Không hợp lệ'. '<\br>';
    }
}
PatternEmail('a@gmail.com');
PatternEmail('ab@yahoo.com');
PatternEmail('abc@hotmail.com');
PatternEmail('@gmail.com');
PatternEmail('ab@gmail');
PatternEmail('@#abc@gmail.com');
PatternEmail('@#abc@8785.com');

