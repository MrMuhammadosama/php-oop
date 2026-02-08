<?php

abstract class Student{

public $name;

 function __construct($str){
    $this->name = $str;    
}

public function getName(){
    return $this->name;

}

abstract public function age();

}


class x extends Student{

public function age(){
return 20;
}
}

$xyz =  new x("ahmed");

echo $xyz->age();

?>

