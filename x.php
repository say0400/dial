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

  $file_handle = fopen("que.txt", "rb");

  while (!feof($file_handle) ) {

  $line_of_text = fgets($file_handle);
  $arr = explode(',', $line_of_text);


  }


  mysql_connect("localhost", "root", "vkdnjwjs");
  mysql_select_db("ohnew");
  $result = mysql_query("SELECT * FROM student");
  $ques = mysql_query("SELECT quesno FROM student WHERE studentID=".$_GET["studentID"]);
  $quesno = mysql_fetch_array($ques);
  echo $quesno[0];

  if($arr[$quesno[0]]=='x')
  {


    //Sending form data to sql db.
    $quesno[0] = $quesno[0]+1;
    if($arr[$quesno[0]]!='o'&& $arr[$quesno[0]]!='x')
    {
        header('location: finish.php');
    }
    mysql_query("UPDATE student SET score =score+1 WHERE studentID=".$_GET["studentID"]); //click count 를 문제의 파악. 학번 넘기는 것 해결하자.
    mysql_query("UPDATE student SET quesno='$quesno[0]' WHERE studentID=".$_GET["studentID"]);
  }

  else {
    $quesno[0] = $quesno[0]+1;
    if($arr[$quesno[0]]!='o'&& $arr[$quesno[0]]!='x')
    {
        header('location: finish.php');
    }
    mysql_query("UPDATE student SET quesno='$quesno[0]' WHERE studentID=".$_GET["studentID"]);
  }

  fclose($file_handle);

  $referer_url = $_SERVER['HTTP_REFERER'];

   //Move to prev page
   if($arr[$quesno[0]]=='o'||$arr[$quesno[0]]=='x')
   {
        header('location:'.  $referer_url);
   }



  ?>


	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		 <!-- Include all compiled plugins (below), or include individual files as needed -->
		 <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
