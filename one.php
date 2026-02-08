<?php

class Student{
    public $name;

    function __construct($str){
        $this->name = $str;
    }

    public function getName(){
        return $this->name;
    }

}


class x extends Student {
}



class x1 extends Student {
}



// $student1 = new Student("osama");

// echo $student1->getName();

$student2 = new x("ahmed");

echo $student2->name;


$student2 = new x1("sayed");
echo $student2->name;
?>