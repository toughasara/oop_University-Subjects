<?php
require_once  './tudent.php' ;

/**
 * User: TheCodeholic
 * Date: 4/8/2020
 * Time: 10:16 PM
 */

/**
 * Class Subject
 */
class Subject
{
    private $code;
    private $name;
    /**
     * @var Student[]
     */
    private $students = [] ;

    public function getCode(){
        return  $this->code;
    }
    public function getName(){
        return  $this->name;
    }
    public function getstudents(){
        return  $this->students;
    }
    public function setCode($code){
        $this->code=$code;
    }
    public function setName($name){
        $this->name=$name;
    }

    public function setstudents($students){
        $this->students=$students;
    }

    // TODO Generate getters and setters
    // TODO Generate constructor for all attributes. $students argument of the constructor can be empty

    public function __construct($code,$name,$students=''){
        $this->code=$code;
        $this->name=$name;
        $this->students=$students;
        
    }

    /**
     * Method accepts student name and number, creates instance of the Student class, adds inside $students array
     * and returns created instance
     *
     * @param string $name
     * @param string $studentNumber
     * @return \Student
     */
    public function addStudent(string $name, string $studentNumber): Student
    {
        // TODO Implement method according to method annotation
        $student = new student( $name,  $studentNumber) ;
        $this->students[] = $student;
        return $student;
    }
}