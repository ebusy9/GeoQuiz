<?php
session_start();
if (isset($_SESSION['lastErrMsg'])) {
    echo $_SESSION['lastErrMsg'];
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>GéoQuiz</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="question">
                    <div class="header">
                        <h1>GéoQuiz !</h1>
                        <span id="questionNumber"></span> <!--attention à id="questionNumber"-->
                    </div>
                </div>
                <form action="" type="POST">
                    <div class="question">
                        <div class="question-title">
                            <h5 id="enunciate"></h5> <!--attention à id="enunciate"-->
                        </div>
                        <div>
                        <span id="timer" class="timer-container"></span>
                        </div>
                        <div class="reponses">
                            <label class="radio" id="responseOne">
                                <input type="radio" name="reponse" value="">
                                <span></span> <!--attention à id="responseOne"-->
                            </label>
                        </div>
                        <br>
                        <div class="reponses">
                            <label class="radio" id="responseTwo">
                                <input type="radio" name="reponse" value="">
                                <span></span> <!--attention à id="responseTwo"-->
                            </label>
                        </div>
                        <br>
                        <div class="reponses">
                            <label class="radio" id="responseThree">
                                <input type="radio" name="reponse" value="">
                                <span></span> <!--attention à id="responseThree"-->
                            </label>
                        </div>
                        <br>
                        <div class="reponses">
                            <label class="radio" id="responseFour">
                                <input type="radio" name="reponse" value="">
                                <span></span> <!--attention à id="responseFour"-->
                            </label>
                        </div>
                        <div>
                            <button class="btn" type="submit">
                                Valider la réponse
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="quizz.js"></script>

</html>