<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="stylesheet" type="text/css" href="http://localhost/style2.css">

	<link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>



  <?php

  $clickscore = $_GET['clickscore'];
  $score = $_GET['score'];
	$studentID = $_GET['studentID'];

  echo $studentID;
	echo "님은 총 ";
	echo $score;
	echo "점을 획득 하셨습니다!";
	echo "클릭 스코어는 ";
	echo $clickscore;
	echo "점 입니다!";



  mysql_connect("localhost", "root", "vkdnjwjs");
  mysql_select_db("ohnew");


  mysql_query("UPDATE student SET score=$score WHERE studentID= $studentID");


  ?>


	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		 <!-- Include all compiled plugins (below), or include individual files as needed -->
		 <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
