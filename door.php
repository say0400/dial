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

		<form name="dial" method="get" action="1.php">
				 <input type="hidden" name="studentID" value="<?=$_GET["studentID"];?>">

		</form>

		 <center><h1><br><br><br>다른 이용자를 기다리는 중 입니다...</h1></center>
	    <div id="server_time"><?php echo date("Y-m-d H:i:s", time()); ?></div>
	<script>

	var srv_time = "<?php print date("F d, Y H:i:s", time()); ?>";
	var now = new Date(srv_time);


	setInterval("server_time()", 1000);


	function server_time()
	{
	    now.setSeconds(now.getSeconds()+1);

	    var year = now.getFullYear();
	    var month = now.getMonth() + 1;
	    var date = now.getDate();
	    var hours = now.getHours();
	    var minutes = now.getMinutes();
	    var seconds = now.getSeconds();

	    if (month < 10){
	        month = "0" + month;
	    }

	    if (date < 10){
	        date = "0" + date;
	    }

	    if (hours < 10){
	        hours = "0" + hours;
	    }

	    if (minutes < 10){
	        minutes = "0" + minutes;
	    }

	    if (seconds < 10){
	        seconds = "0" + seconds;
	    }


	    document.getElementById("server_time").innerHTML = year + "-" + month + "-" + date + " " + hours + ":" + minutes + ":" + seconds;
			if((hours == "<?=$_GET['hour'];?>") && (minutes == "<?= $_GET['min']; ?>") &&
			(seconds == "<?= $_GET['sec'];?>")){
					 document.dial.submit();// 시간 지나면 사이트 이동시킨다 이쪽으로!
			 }

	}

 </script>










  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
