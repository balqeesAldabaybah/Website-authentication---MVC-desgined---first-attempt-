<?php
class Question{
    protected $ID;
    protected $question;
    protected $No_Options;
    protected $Option1;
    protected $Option2;
    protected $Option3;
    protected $Option4;
    protected $No_CorrectAnswer;

    public function __construct($ID,$question,$No_Options,$Option1,$Option2,$Option3,$Option4,$No_CorrectAnswer){
        $this->ID = $ID;
        $this->question = $question;
        $this->No_Options= $No_Options;
        $this->Option1=$Option1;
        $this->Option2=$Option2;
        $this->Option3=$Option3;
        $this->Option4=$Option4;
        $this->No_CorrectAnswer = $No_CorrectAnswer;
    }

    public function getQuestion(){
        $ques = array(
            "ID"=>$this->ID,
            "question"=>$this->question,
            "No_Options"=>$this->No_Options,
            "Option1"=>$this->Option1,
            "Option2"=>$this->Option2,
            "Option3"=>$this->Option3,
            "Option4"=>$this->Option4,
            "No_CorrectAnswer"=>$this->No_CorrectAnswer 
        );

        return $ques;
    }
}

?>