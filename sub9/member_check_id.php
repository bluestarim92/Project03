<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>아이디 중복체크</title>
<style>
*{margin: 0; padding: 0; border: 0;}
ul, li{list-style: none}
h3 {
	background:  #008d96;
	height:  36px;
	line-height: 36px;
	color:  #ffffff;
	font-size:  16px;
	width:  100%;
	padding-left:  10px;
	overflow-x: hidden;
}
li{margin-left:  20px; color:  #666666; font-size:  14px; margin-top:  10px;}
#close {
	margin:  20px 0 0 80px;
	cursor:  pointer;
}
.btn_close{width: 60px; height: 30px; border-radius:  5px; background: #008d96; color:  #ffffff; position:  absolute; left:  40%; top:  70%; transition: translate(-40%, -70%);}

</style>
</head>
<body>
<h3>아이디 중복체크</h3>
<p>
<?php
	include "../define.php";

	$id = $_GET['id'];

	if(!$id)
	{
		echo('<li>아이디를 입력해주세요!</li>');
	}
	else
	{
		$con = mysqli_connect("localhost", DBuser, DBpass, DBname);

		$sql = "select * from members where id='$id'";
		$result = mysqli_query($con, $sql);

		$num_record = mysqli_num_rows($result);

		if($num_record)
		{
			echo "<li>".$id." 아이디는 중복됩니다.</li>";
			echo "<li>다른 아이디를 사용해 주세요!</li>";
		}
		else
		{
			echo "<li>".$id." 아이디는 사용가능합니다.</li>";
		}

		mysqli_close($con);
	}
?>
</p>
<div id="close">
	<button class="btn_close" onclick="javacript:self.close()">닫기</button>
</div>
</body>
</html>
