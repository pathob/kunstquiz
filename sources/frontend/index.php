<?php
session_start();
$_SESSION = array();
session_unset();
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FUs größtes Kunstquiz</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,300,700,600' rel='stylesheet' type='text/css' /><link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="css/custom.css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/scripts.js" type="text/javascript"></script>
</head>
<body>
<article>
  <section class="header">
  	<div class="container">
      <h2 class="page_title">FU KUNSTQUIZ</h2>
      <nav>
        <span class="glyphicon glyphicon-menu-hamburger"></span>
      </nav>
    </div>
  </section>
	<div class="container">
    <div class="row">
    	<div class="col-md-6 quiz_image">
            <img src="img/kunstquiz.jpg" alt="" />
      </div>
      <div class="col-md-6 quiz_start">
        <section class="quiz_question_container">
          <div class="quiz_question">Wähle die Anzahl der Fragen aus, die du spielen möchtest.</div>
        </section>
        <section class="answers">
          <div class="row">
            <div class="col-sm-12">
              <form id="bilderquiz" action="quiz.php" method="post">
                <button class="answerButton" id="questionCount" name="questionCount" value="10" type="submit">10</button>
              </form>   
            </div>
            <div class="col-sm-12">
              <form action="quiz.php" method="post">
                <button class="answerButton" id="questionCount" name="questionCount" value="15" type="submit">15</button>
              </form> 
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <form action="quiz.php" method="post">
                <button class="answerButton" id="questionCount" name="questionCount" value="20" type="submit">20</button>
              </form> 
            </div>
          </div>
        </section>
      </div> 
    </div>
  </div>
<section class="footer">
	<div class="container">
    <div class="col-xs-12">
      <h4>XML-Technologien (Web Data and Interoperability)</h4>
    </div>
  </div>
</section>
</article>
</body>
</html>