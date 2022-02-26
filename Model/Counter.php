<?php

class Counter {
    static function Count() {
        if(file_exists('counter.txt')) {
            $count = (int) file_get_contents('counter.txt');
            file_put_contents('counter.txt', $count + 1);
        } else {
            file_put_contents('counter.txt', 1);
        }
    }

    static function GetCount() {
        if(file_exists('counter.txt'))
            return file_get_contents('counter.txt');
        else
            return 0;
    }
}