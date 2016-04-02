<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="stylesheet" type="text/css" href="http://localhost/style2.css">

  <link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">

  <script>
  <!--
  function Timer() {
  setTimeout("locateKap()",30000);
   }
  function locateKap(){
   location.replace("http://localhost/2.php"); // 시간 지나면 사이트 이동시킨다 이쪽으로!
  }
   //-->


    cnt = 30; // 카운트다운 시간 초단위로 표시
    function countdown() {
     if(cnt == 0){
            // 시간이 0일경우
           locateKap();
     }else {
           // 시간이 남았을 경우 카운트다운을 지속한다.

          document.all.choonDiv.innerHTML = "<br><br><br><br><br><br>"+ cnt + "초후에 PLAY 화면으로 이동이 됩니다...";
          setTimeout("countdown()",1000);

    cnt--;
     }
    }
  </script>

</head>


<body onLoad="Timer();">

<div id="choonDiv"></div>

<script>countdown();</script>


  <?php
  //Connecting to sql db.
  $connect = mysqli_connect("localhost", "root", "vkdnjwjs","ohnew");
  //Sending form data to sql db.
  mysqli_query($connect,"INSERT INTO student (studentID) VALUES ('$_POST[studentID]')");
  ?>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>

</body>
</html>
