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
	<link rel="stylesheet" href="css/sub11.css"/>
	<link rel="stylesheet" href="css/common_style2.css"/>
	<script src="../js/jquery-1.9.1.min.js"></script>
	<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon"/>
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>
	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="https://kit.fontawesome.com/82c75915db.js" crossorigin="anonymous"></script>
	<script src="../js/prefixfree.min.js"></script>
	<script src="../js/html5div.js"></script>
	<script src="../js/html5shiv.js"></script>
	<script src="../js/guideText.js"></script>
    <script src="../js/script.js"></script>
    <script src="js/sub11.js"></script>
    <script>
		function check_input(){
			if(!document.board_form.subject.value)
			{
				alert("제목을 입력하세요!");
				document.board_form.subject.focus();
				return;
			}
			if(!document.board_form.content.value)
			{
				alert("내용을 입력하세요");
				document.board_form.content.focus();
				return;
			}
			document.board_form.submit();
		}
	</script>
</head>
<body>
	<header>
		<?php include "header.php";?>
	</header>
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
											<li><a href="#">정보수정</a></li>
											<li><a href="#">회원가입</a></li>
											<li><a href="message_form.php">쪽지 보내기</a></li>
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
					<span class="location">HOME > 홈페이지도우미 > 회원정보 > 쪽지 보내기 </span>
					<!-- 오른쪽 좋아요, SNS, 프린트 -->
					<span class="print_btn"></span>
					<span class="sns_n"></span>
					<span class="sns_k"></span>
					<span class="sns_t"></span>
					<span class="sns_f"></span>
					<span class="like_btn"></span>
				</div>
		<div class="message_info">
			<p>중앙선거관리위원회 회원들의 자유로운 의견 교환을 위해 제공하는 서비스 입니다.<br><br>
			아름다운 선거 문화를 위해 회원분들은 인터넷 에티켓을 준수해주시기 바랍니다.</p>
			<div class="message_img">
				<img src="images/messenger.png">
			</div>
		</div>
		<div class="board_box">
			<h3 id="write_title">
				게시판 목록보기
			</h3>
			<ul id="board_list">
				<li>
					<span class="col1">번호</span>
					<span class="col2">제목</span>
					<span class="col3">글쓴이</span>
					<span class="col4">첨부</span>
					<span class="col5">등록일</span>
					<span class="col6">조회</span>
				</li>
			</ul>
			<?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from board order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 10;

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;

	for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
	{
		mysqli_data_seek($result, $i);
		// 가져올 레코드로 위치(포인터) 이동
		$row = mysqli_fetch_array($result);
		// 하나의 레코드 가져오기
		$num         = $row["num"];
		$id          = $row["id"];
		$name        = $row["name"];
		$subject     = $row["subject"];
		$regist_day  = $row["regist_day"];
		$hit         = $row["hit"];
		if ($row["file_name"])
			$file_image = "<img src='images/file.gif'>";
		else
			$file_image = " ";
?>
			<li>
				<span class="col1"><?=$number?></span>
				<span class="col2"><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span>
				<span class="col3"><?=$name?></span>
				<span class="col4"><?=$file_image?></span>
				<span class="col5"><?=$regist_day?></span>
				<span class="col6"><?=$hit?></span>
			</li>	
<?php
		$number--;
	}
	mysqli_close($con);
?>
		</ul>
		<ul id="page_num"> 	
<?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<li><a href='board_list.php?page=$new_page'>◀ 이전</a> </li>";
	}		
	else 
		echo "<li>&nbsp;</li>";

	// 게시판 목록 하단에 페이지 링크 번호 출력
	for ($i=1; $i<=$total_page; $i++)
	{
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<li><b> $i </b></li>";
		}
		else
		{
			echo "<li><a href='board_list.php?page=$i'> $i </a><li>";
		}
	}
	if ($total_page>=2 && $page != $total_page)		
	{
		$new_page = $page+1;	
		echo "<li> <a href='board_list.php?page=$new_page'>다음 ▶</a> </li>";
	}
	else 
		echo "<li>&nbsp;</li>";
?>
		</ul> <!-- page -->	    	
		<ul class="buttons">
			<li><button onclick="location.href='board_list.php'">목록</button></li>
			<li>
<?php 
	if($userid) {
?>
				<button onclick="location.href='board_form.php'">글쓰기</button>
<?php
	} else {
?>
				<a href="javascript:alert('로그인 후 이용해 주세요!')"><button>글쓰기</button></a>
<?php
	}
?>
			</li>
		</ul>
		</div><!--board_box -->
	</section>
	<footer>
		<?php include "footer.php";?>
	</footer>
</body>
</html>