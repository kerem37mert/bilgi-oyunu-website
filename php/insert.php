<?php

if(isset($_GET["subjectInput"])):
    $subjectInput = htmlspecialchars($_GET["subjectInput"]);
    $questionInput = htmlspecialchars($_GET["questionInput"]);
    $correctInput = htmlspecialchars($_GET["correctInput"]);
    $answerInput1 = htmlspecialchars($_GET["answerInput1"]);
    $answerInput2 = htmlspecialchars($_GET["answerInput2"]);
    $answerInput3 = htmlspecialchars($_GET["answerInput3"]);
    $nameInput = htmlspecialchars($_GET["nameInput"]);
    $mailInput = htmlspecialchars($_GET["mailInput"]);

    if
    (
        $subjectInput != "" &&
        $questionInput != "" &&
        $correctInput != "" &&
        $answerInput1 != "" &&
        $answerInput2 != "" &&
        $answerInput3 != "" &&
        $nameInput != "" &&
        $mailInput != ""

    ):
        require_once("Question.php");

        $Question = new \site\Question();

        $Question->subjectInput = $subjectInput;
        $Question->questionInput = $questionInput;
        $Question->correctInput = $correctInput;
        $Question->answerInput1 = $answerInput1;
        $Question->answerInput2 = $answerInput2;
        $Question->answerInput3 = $answerInput3;
        $Question->nameInput = $nameInput;
        $Question->mailInput = $mailInput;

        $Question->insertQuestion();

    else:
        echo "Lütfen boş alan bırakmayınız!";
    endif;

endif;