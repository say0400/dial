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
	  $quesno = mysql_fetch_array($ques);
	?>



<center>
  <table>
  </br>
	<h2><?=$_GET["studentID"];?>님! 반갑습니다! :)</h2>
	<h1><?=$quesno[0]+1?>번 문제입니다!</h1>

	<div class="progress" id="example-percent-container"></div>

	<script>
	var circle = new ProgressBar.Circle('#example-percent-container', {
	    color: '#FCB03C',
	    strokeWidth: 15,
	    trailWidth: 1,
	    duration: 5000,
	    text: {
	        value: '0'
	    },
	    step: function(state, bar) {
	        bar.setText((bar.value() * 100).toFixed(0));
	    }
	});

	circle.animate(1, function() {
	    circle.animate(0);
	})

//////////////////////////// 아래는 진짜 타이머
	function Timer() {
  setTimeout("locateKap()",7000);
   }
  function locateKap(){



	document.dialT.submit();


  }
   //-->


    //cnt = 5; // 카운트다운 시간 초단위로 표시
    function countdown() {
     if(cnt == 0){

            // 시간이 0일경우
           locateKap();
     }else {
           // 시간이 남았을 경우 카운트다운을 지속한다.

          setTimeout("countdown()",1000);

    cnt--;
     }
    }


	</script>

	<div id="dialT"></div>

	<script>countdown();</script>


  <form name="dialT" method="get" action = "back.php">
		<input type = "hidden" name="studentID" value="<?=$_GET['studentID']; ?>">
  </form>
					  <tr>
                  <td>
<!--~ 님 반갑습니다. ~몇번 문제입니다. 뜨게 하기.어떤 시각적인 bar(1초당 한칸씩 달게하기)가 나와서 그 시간이 (5초)지나면 그냥 다음문제로 넘어가게 해야 한다. -->
                    <form name="dial" method="get" action = "o.php">
											<input type = "hidden" name="studentID" value="<?=$_GET['studentID']; ?>">
                      <input type="image" src="o.jpg" alt="시작버튼" style="width:150px; height:150x;">

                    </form>
                  </td>
                  <td>
                  <form name="dial" method="get" action = "x.php">
										<input type = "hidden" name="studentID" value="<?=$_GET['studentID']; ?>">
                    <input type="image" src="x.jpg" alt="시작버튼"style="width:150px; height:150px;">
                  </form>
                  </td>
            </tr>

        </table>
</center>


	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		 <!-- Include all compiled plugins (below), or include individual files as needed -->
		 <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
