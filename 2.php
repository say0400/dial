<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="stylesheet" type="text/css" href="http://localhost/style2.css">
  <script src="https://cdn.rawgit.com/kimmobrunfeldt/progressbar.js/0.6.0/dist/progressbar.js"></script>
	<link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
			.progress {
					height: 150px;
			}

			.progress > svg {
					height: 100%;
					display: block;
			}
	</style>

</head>
<body onLoad="Timer();">

	<?php
		mysql_connect("localhost", "root", "vkdnjwjs");
	  mysql_select_db("ohnew");
	  $result = mysql_query("SELECT * FROM student");
	  $ques = mysql_query("SELECT quesno FROM student WHERE studentID=".$_GET["studentID"]);

	?>



<center>
  <table>
  </br>
  <td id="elmclick"></td>
	<h2><?=$_GET["studentID"];?>님! 반갑습니다! :)</h2>
  <div id="dial"></div>
  <div id="time"></div>

	<div class="progress" id="example-percent-container"></div>




  <form name="dialT" method="get" action = "finish.php">
		<input type = "hidden" name="score" value="">
    <input type = "hidden" name="clickscore" value="">
    <input type = "hidden" name="studentID" value="<?=$_GET['studentID']; ?>">
  </form>
					  <tr>
                  <td>
<!--~ 5초 전에 눌러도 기다려야 한다. (php) sleep 하고 function으로 기다렸다가 결과 전송.... 답 누른 상태에서는 다른 답 못누르게 해야한다.(다른 페이지로 보내버리자...) -->

											<input type = "hidden" name="studentID" value="<?=$_GET['studentID']; ?>">
                      <input type="image" id = "o" src="o.jpg" alt="시작버튼" style="width:150px; height:150x;">


                  </td>
                  <td>

										<input type = "hidden" name="studentID" value="<?=$_GET['studentID']; ?>">
                    <input type="image" id = "x" src="x.jpg" alt="시작버튼"style="width:150px; height:150px;">

                  </td>
            </tr>

        </table>
</center>

<script>

 var clickscore=0;
 var stop=0;
 var realquesno=1;
 var score=0;
 var quesno=2;//2부터 답을 읽어낸다. 4문제라면 총 5개의 char 정답을 만들어야한다.;
 var t1 = document.getElementById('o');
 var t2 = document.getElementById('x');

        t1.addEventListener('click', function(event){
          if(stop==1)
            event.preventDefault();
else{
     var xhr = new XMLHttpRequest();
     xhr.open('POST', './ans.php');
     xhr.onreadystatechange = function(){

       if(xhr.readyState === 4 && xhr.status === 200){
                   var _tzs = xhr.responseText;
                   var tzs = _tzs.split(',');
                  if(tzs[quesno]=='o')
                {
                  score = score + 1;
                  var info = document.getElementById('elm'+event.type);
                  clickscore = clickscore + cnt;
                  info.innerHTML = (clickscore);
                }
                 }
                 stop=1;
     }


  }
     xhr.send();


 });


 t2.addEventListener('click', function(event){
   if(stop==1)
     event.preventDefault();

   else{
 var xhr = new XMLHttpRequest();
 xhr.open('POST', './ans.php');
 xhr.onreadystatechange = function(){

 if(xhr.readyState === 4 && xhr.status === 200){
            var _tzs = xhr.responseText;
            var tzs = _tzs.split(',');
           if(tzs[quesno]=='x')
         {
           score = score + 1;
           var info = document.getElementById('elm'+event.type);
           clickscore = clickscore + cnt;
           info.innerHTML = (clickscore);
         }
        }
         stop=1;
 }

}

 xhr.send();


 });



 function Timer() {
 setTimeout("locateKap()",16000);
  }
 function locateKap(){
    document.dialT.clickscore.value = clickscore;
   document.dialT.score.value = score;
  document.dialT.submit();// 시간 지나면 끝낸다.
 }


   cnt = 16; // 카운트다운 시간 초단위로 표시
   function countdown() {
    if(cnt<16&&cnt%4==0){
      stop=0;

      if(realquesno<4)
      realquesno = realquesno + 1;

            document.all.dial.innerHTML = "<center><h1><br>"+realquesno+"번 문제 입니다.</h1></center>";
            document.all.time.innerHTML = "<center><h1><br>(테스트용) 총 남은시간"+cnt+"초</h1></center>";
          quesno = quesno + 1;
           cnt--;
    }else {
        document.all.dial.innerHTML = "<center><h1><br>"+realquesno+"번 문제 입니다.</h1></center>";
          document.all.time.innerHTML = "<center><h1><br>(테스트용) 총 남은시간"+cnt+"초</h1></center>";
   cnt--; //cnt 값을 전역 변수로 선언하고 cnt값마다 점수를 다르게 배정하면 빠르게 누른 사람이 더 많은 점수를 받는 부분을 구현할 수 있지 않을까?
 }

       setTimeout("countdown()",1000);
   }




var circle = new ProgressBar.Circle('#example-percent-container', {
    color: '#FCB03C',
    strokeWidth: 15,
    trailWidth: 1,
    duration: 16000,
    text: {
        value: '0'
    },
    step: function(state, bar) {
        bar.setText((bar.value() * 100).toFixed(0));
    }
});

circle.animate(4, function() {
    circle.animate(0);
})



</script>


	<script>countdown();</script>


	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		 <!-- Include all compiled plugins (below), or include individual files as needed -->
		 <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
