<!DOCTYPE html>
<?php
	$userid = setcookie('userid', 'bluestarim92');
	$username = setcookie('username', '임현진', time()+60);
?>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="임현진"/>
	<meta name="Keywords" content="포트폴리오, Portfolio, 임현진의 포트폴리오, Hyeonjin's Portfolio"/>
	<meta name="Description" content="임현진의 포트폴리오를 소개합니다."/>
	<title>PHP Project</title>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/common_style.css"/>
	<link rel="stylesheet" href="css/common_style2.css"/>
	<link href="css/KBmodal.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"/>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.min.js"></script> <!-- UI 플러그인 연동 -->
	<script src="js/jquery.cookie.js"></script>  <!-- 쿠키 플러그인 연동 -->
	<script src="js/prefixfree.min.js"></script>
	<script src="js/html5div.js"></script>
	<script src="js/html5shiv.js"></script>
	<script src="js/ytplayer.js"></script>
	<script src="js/cookies.js"></script>
	<script src="js/KBmodal.js"></script>
	<script src="js/weather_kor.js"></script>
	<script src="js/weather_cali.js"></script>
	<script src="js/weather_tokyo.js"></script>
	<script src="js/weather_shanghai.js"></script>
	<script src="js/pm_kor.js"></script>
	<script src="js/pm_cali.js"></script>
	<script src="js/pm_tokyo.js"></script>
	<script src="js/pm_shanghai.js"></script>
	<script src="js/time.js"></script>
	<script src="js/guideText.js"></script>
    <script src="js/script.js"></script>
	<script>
		window.open("pop/pop.html", "", "resizable=no, toolbar=no, width=580, height=580, scroll=no, top=100, left=500");
	</script>
	<!--[if lte ie 8]>
		<link href="css/non-ie9.css"/ rel="stylesheet">
	 <![endif] -->
</head>
<body onLoad="ddaycount()">
	<header>
		<?php include "header2.php";?>
	</header>
	<section>
		<?php include "main.php";?>
	</section>
	<footer>
		<?php include "footer.php";?>
	</footer>
</body>
</html>