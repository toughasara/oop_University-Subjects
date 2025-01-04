<?php
require_once "AbstractUniversity.php";
require_once "Subject.php";



/**
 * Class University
 */
class University extends AbstractUniversity
{

    // TODO Implement all the methods declared in parent
    public function addSubject(string $code, string $name): Subject{
        $subject= new Subject($code , $name );
        $this->subjects[]= $subject;
        return $subject;
    }

    public function addStudentOnSubject(string $subjectCode, Student $student){
        $listSubject = getSubjects();
        foreach($listSubjec as $subject){
            if($subject->getCode() == $subjectCode){
                $subject->addStudent($student->getName(),$student->getStudentNumber());
            }
        }
    }

    public function getStudentsForSubject(string $subjectCode){
        $listSubject = getSubjects();
        foreach($listSubjec as $subject){
            if($subject->getCode() == $subjectCode){
                echo $subject->getstudents();
            }
    }
}
    public function getNumberOfStudents(): int{ 
        $nembersOfTheStudent = 0 ;
        $allSubjects = getSubject() ;  
        foreach($allSubjects as $subject){
            foreach($subject->getStudent as $Students){
                $nembersOfTheStudent++;
            }
        }
        return  $nembersOfTheStudent ;
    }

    public function print(){
        $allSubjects = getSubject() ;  
        foreach($allSubjects as $subject){
            echo $subject->getName();
            for($i=0;$i<25;$i++){
                echo '-';
            }
            foreach($subject->getStudent as $Students){
                echo $Students->getName().'-'.$Students->getStudentNumber();

            }
    }

}

}