<?php 
class User{
    public $name;
    public $lastname;
    protected $idnumber;
    protected $tell;
    public $age;
    public function __construct($name,$lastname,$idnumber,$tell,$age){
        $this->name=$name;
        $this->lastname=$lastname;
        $this->idnumber=$idnumber;
        $this->tell=$tell;
        $this->age=$age;
    }
    public function getInfo(){
        return[
            'ԱՆՈՒՆ'=>$this->name,
            'ԱԶԳԱՆՈՒՆ'=>$this->lastname,
           'ԱՆՁՆԱԳՐԻ ՀԱՄԱՐ'=>$this->idnumber,
            'ՀԵՌԱԽՈՍ'=>$this->tell,
           'ՏԱՐԻՔ'=>$this->age,
        ];
    }
}
class Student extends User{
    public $gpa;
    public $faculty;
    public $course;
    public function __construct($name,$lastname,$idnumber,$tell,$age,$gpa,$faculty,$course){
        parent::__construct($name,$lastname,$idnumber,$tell,$age);
        $this->gpa=$gpa;
        $this->faculty=$faculty;
        $this->course=$course;
    }
    public function getFullInfo(){
        $info=$this->getInfo();
        $studentInfo=[
            'ՄՈԳ'=>$this->gpa,
            'ՖԱԿՈՒԼՏԵՏ'=>$this->faculty,
            'ԿՈՒՐՍ'=>$this->course,
        ];
        return array_merge($info,$studentInfo);
    }
}


?>