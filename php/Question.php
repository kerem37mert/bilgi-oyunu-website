<?php

namespace site;

require_once("database.php");

class Question extends database
{
    public string $subjectInput;
    public string $questionInput;
    public string $correctInput;
    public string $answerInput1;
    public string $answerInput2;
    public string $answerInput3;
    public string $nameInput;
    public string $mailInput;

    public function insertQuestion()
    {
        $this->insert("insert into communityquestions (subject,question,correctAnswer,answer1,answer2,answer3,name,mail) VALUES(?,?,?,?,?,?,?,?)",
            [$this->subjectInput,$this->questionInput,$this->correctInput,$this->answerInput1,$this->answerInput2,$this->answerInput3,$this->nameInput,$this->mailInput]);

        echo "Soru başarıyla gönderildi.";
    }
}