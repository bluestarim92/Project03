<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="임현진"/>
	<meta name="Keywords" content="포트폴리오, Portfolio, 임현진의 포트폴리오, Hyeonjin's Portfolio"/>
	<meta name="Description" content="임현진의 포트폴리오를 소개합니다."/>
	<title>PHP Project</title>
	<link rel="stylesheet" href="css/common_style.css"/>
	<link rel="stylesheet" href="css/sub9.css"/>
	<link rel="stylesheet" href="css/common_style2.css"/>
	<script src="../js/jquery-1.9.1.min.js"></script>
	<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon"/>
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>
	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="../js/prefixfree.min.js"></script>
	<script src="../js/html5div.js"></script>
	<script src="../js/html5shiv.js"></script>
	<script src="../js/guideText.js"></script>
    <script src="../js/script.js"></script>
    <script src="js/sub6.js"></script>
    <script src="js/member_modify.js"></script>
	<!--[if lte ie 8]>
		<link href="css/non-ie9.css"/ rel="stylesheet">
	 <![endif] -->
	
</head>
<body>
	<header>
		<?php include "header.php";?>
	</header>
<?php
	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
	$sql = "select * from members where id='$userid'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);

	$pass = $row['pass'];
	$name = $row['name'];

	$email = explode("@", $row["email"]);
	$email1 = $email[0];
	$email2 = $email[1];

	mysqli_close($con);
?>
	<section>
		<div id="wrapper">
		<div id="container">
			<div class="asidewrap">
				<div class="aside1">
					<div class="aside1_subj">홈페이지도우미</div>
						<div class="sidewrap">
							<div class="sidemenu">
								<span class="title">전체메뉴</span>		
									<div class="subsidemenu">
										
									</div>
							</div>
							<div class="sidemenu">
								<span class="title">이용정책</span>		
									<div class="subsidemenu">
										<ul class="sidecontent cf">		
											<li><a href="#">이용약관</a></li>		
											<li><a href="#">개인정보처리방침</a></li>
											<li><a href="#">저작권 정책</a></li>
											<li><a href="#">웹접근성정책</a></li>
											<li><a href="#">장애인이용안내</a></li>
											<li><a href="#">이메일무단수집거부</a></li>
										</ul>
									</div>
							</div>
							<div class="sidemenu">
								<span class="title">뷰어다운로드</span>
							</div>
							<div class="sidemenu">
								<span class="title">RSS</span>
							</div>
							<div class="sidemenu">
								<span class="title">소셜미디어맵</span>
							</div>
							<div class="sidemenu">
								<span class="title">배너존</span>
							</div>
							<div class="sidemenu">
								<span class="title">회원정보</span>		
									<div class="subsidemenu">
										<ul class="sidecontent cf">		
											<li><a href="#">로그인</a></li>		
											<li><a href="#">아이디찾기</a></li>
											<li><a href="member_modify_form.php">정보수정</a></li>
											<li><a href="#">회원가입</a></li>
										</ul>
									</div>
							</div>
					</div>
				</div>
				<div class="aside2">
						<h3>가장 많이 본 정보</h3>
						<div class="tab_wrap">
							<div class="tab">
								<ul class="tabs">
									<li><a href="#panelS-1" class="active">전체</a></li>
									<li><a href="#panelS-2">통합자료실</a></li>
								</ul>
							</div>
							<div id="panelS-1" class="tab_content panel">
								<ul class="cf">
									<li class="content cf">
										<a href="#">
										<span class="bullet_num_pink">1</span>
										투명한 개표 절차[4. 7. 재·보궐선거] 
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num_pink">2</span>
										후보자 정보공개 내용에는 어떤 것들이 있을까요?[재보궐선거] 
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num_pink">3</span>
											2021년도 제3회 경력경쟁채용시험 시행계획 공고
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num">4</span>
											2021. 4. 7. 실시 재·보궐선거 정당·후보자를 위한 선거사무안내  
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num">5</span>
											후보자 등록은 어떻게 하나요? [2021. 4. 7. 재·보궐선거] 
										</a>
									</li>
								</ul>
							</div>
							<div  id="panelS-2" class="tab_content ie panel">
								<ul class="cf">
									<li class="content cf">
										<a href="#">
										<span class="bullet_num_pink">1</span>
											2021. 4. 7. 실시 재·보궐선거 정당·후보자를 위한 선거사무안내 
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num_pink">2</span>
											『반환기탁금 및 보전비용의 인계비용 계산프로그램』(4. 7. 재.보궐선거용)  
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num_pink">3</span>
											Election Information for Foreign Voter (외국인 유권자 선거정보)
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num">4</span>
											투표참여 대국민행동수칙  
										</a>
									</li>
									<li class="content cf">
										<a href="#">
										<span class="bullet_num">5</span>
											공직선거법 개정의견(2021. 4. 21)  
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				<div class="aside3">
					<h3>주요선거정보</h3>
					<ul>
						<li><a href="#">정치관계법 질의</a></li>
						<li><a href="#">정치관계법 위반행위신고</a></li>
						<li><a href="#">홈페이지 개선의견</a></li>
						<li><a href="#">선거통계 시스템</a></li>
						<li><a href="#">선거법령정보</a></li>
						<li><a href="#">정책공약알리미</a></li>
					</ul>
				</div>
			</div>
			<div class="article1">
				<div class="menulog">
					<!-- 왼쪽 메뉴 -->
					<span class="homeicon"></span>
					<span class="location">HOME > 홈페이지도우미 > 회원정보 > 정보수정 </span>
					<!-- 오른쪽 좋아요, SNS, 프린트 -->
					<span class="print_btn"></span>
					<span class="sns_n"></span>
					<span class="sns_k"></span>
					<span class="sns_t"></span>
					<span class="sns_f"></span>
					<span class="like_btn"></span>
				</div>
				<h4>회원 정보 수정</h4>
				<div class="sign_upbox">
					<div class="join_box">
						<form name="member_form" method="post" action="member_modify.php?id=<?=$userid?>">
							<h3>수정해야할 정보를 입력해주세요</h3>
							<div class="form id">
								<div class="col1">아이디</div>
								<div class="col2">
									<?=$userid?>
								</div>
							</div>
							<div class="form">
								<div class="col1 pwd">비밀번호</div>
								<div class="col2">
									<input type="password" name="pass" value="<?=$pass?>" class="input_pw">
								</div>
							</div>
							<div class="form">
								<div class="col1">비밀번호확인</div>
								<div class="col2">
									<input type="password" name="pass_confirm" value="<?=$pass?>" class="input_pwcf">
								</div>
							</div>
							<div class="form">
								<div class="col1">이름</div>
								<div class="col2">
									<input type="text" name="name" value="<?=$name?>" class="input_name">
								</div>
							</div>
							<div class="form email">
								<div class="col1">이메일</div>
								<div class="col2 email">
									<input type="text" name="email1" value="<?=$email1?>" class="input_mail"><span>@</span><input type="text" name="email2" value="<?=$email2?>">
								</div>
							</div>
							<div class="buttons">

								<img style="cursor:pointer" src="./images/btn_save.png" onclick="check_input()">&nbsp;
								<img id="reset_button" style="cursor:pointer" src="./images/btn_cancle.png"
										onclick="reset_form()">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<footer>
		<?php include "footer.php";?>
	</footer>
</body>
</html>