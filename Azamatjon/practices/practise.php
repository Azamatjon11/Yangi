<?php
ini_set('display_errors',1);
class practise{

    public function triArea($base, $height){
        $area = $base + $height;
        $answer = $area - 1;
        echo $answer;
        return false;
    }
}
$practise = new practise();
$practise->triArea();
