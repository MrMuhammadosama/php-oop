<?php

interface StudentFee{
    public function fee();
}

interface StudentAttendance{
    public function attendance();
}

class Student implements StudentFee, StudentAttendance{

    public function fee(){
        return 5000;
    }

    public function attendance(){
        return "95%";
    }

}

Class DegreeStudent implements StudentFee{

    public function fee(){
        return "cleared all dues";
    }

}


$student = new Student();

$studentFee = $student->fee();

echo $studentFee;

$studentDegree = new DegreeStudent();
echo "<br />".$studentDegree->fee();
?>