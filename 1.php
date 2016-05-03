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


<body onLoad="Timer();">

<center>
</br>
  <h1><?=$_GET["studentID"];?>님! 반갑습니다! :)</h1>
  <h2>오뉴에 오신걸 환영합니다!</h2>
</center>
  <form name="dial" method="get" action="2.php">
       <input type="hidden" name="studentID" value="<?=$_GET["studentID"];?>">

  </form>

  <script>


  <!--
  function Timer() {
  setTimeout("locateKap()",5000);
   }
  function locateKap(){

   document.dial.submit();// 시간 지나면 사이트 이동시킨다 이쪽으로!
  }
   //-->


    cnt = 5; // 카운트다운 시간 초단위로 표시
    function countdown() {
     if(cnt == 0){

            // 시간이 0일경우
           locateKap();
     }else {
           // 시간이 남았을 경우 카운트다운을 지속한다.

          document.all.dialT.innerHTML = "<center><h1><br><br><br>"+ cnt + "초후에 PLAY 화면으로 이동이 됩니다...</h1></center>";
          setTimeout("countdown()",1000);

    cnt--; //cnt 값을 전역 변수로 선언하고 cnt값마다 점수를 다르게 배정하면 빠르게 누른 사람이 더 많은 점수를 받는 부분을 구현할 수 있지 않을까?
     }
    }
  </script>


<div id="dialT"></div>

<script>countdown();</script>







  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>

</body>
</html>
