<?php

trait A{

public function hello(){
    echo "hello from trait A";
}

}

trait B{
public function hello(){
    echo "hello from trait B";
}
}

class Student{
    use A;
}

$student = new Student();
$student->hello();

?>