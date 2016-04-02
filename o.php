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

  <?PHP

  $file_handle = fopen("que.txt", "rb");

  while (!feof($file_handle) ) {

  $line_of_text = fgets($file_handle);
  $arr = explode(',', $line_of_text);


  }

  if($arr[0]=='o')
  {

    //Connecting to sql db.
    $connect = mysqli_connect("localhost", "root", "vkdnjwjs","ohnew");
    $result = mysqli_query($connect, "SELECT * FROM student");
    //Sending form data to sql db.
    $row = mysql_fetch_array($result)
    mysqli_query($connect,"INSERT INTO student(score) VALUES ('$row[score]')");

  }

  fclose($file_handle);

  ?>

	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		 <!-- Include all compiled plugins (below), or include individual files as needed -->
		 <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
