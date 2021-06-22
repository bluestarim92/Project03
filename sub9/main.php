<script>
function check_input()
	{
		if(!document.member_form.id.value) {
			alert("아이디를 입력하세요!");
			document.member_form.id.focus();
			return;
		}

		if(!document.member_form.pass.value) {
			alert("비밀번호를 입력하세요!");
			document.member_form.pass.focus();
			return;
		}

		if(!document.member_form.pass_confirm.value) {
			alert("비밀번호확인을 입력하세요!");
			document.member_form.pass_confirm.focus();
			return;
		}

		if(!document.member_form.name.value) {
			alert("이름을 입력하세요!");
			document.member_form.name.focus();
			return;
		}

		if(!document.member_form.email1.value) {
			alert("이메일 주소를 입력하세요!");
			document.member_form.email1.focus();
			return;
		}

		if(!document.member_form.email2.value) {
			alert("이메일 주소를 입력하세요!");
			document.member_form.email2.focus();
			return;
		}

		if(document.member_form.pass.value !=
			 document.member_form.pass_confirm.value) {
			alert("비밀번호가 일치하지 않습니다. \n다시 입력해 주세요!");
			document.member_form.pass.focus();
			document.member_form.pass.select();
			return;
		}

		document.member_form.submit();
	}

	function reset_form() {
		document.member_form.id.value = "";
		document.member_form.pass.value = "";
		document.member_form.pass_confirm.value = "";
		document.member_form.name.value = "";
		document.member_form.email1.value = "";
		document.member_form.email2.value = "";
		document.member_form.id.focus();
	}

	function check_id() {
		window.open("member_check_id.php?id=" + document.member_form.id.value,
			"IDcheck",
			"left=700, top=300, width=350, height=200, scrollbars=no, resizable=yes");
	} 
</script>
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
											<li><a href="#">비밀번호 재설정</a></li>
											<li><a href="member_form.php">회원가입</a></li>
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
					<span class="location">HOME > 홈페이지도우미 > 회원정보 > 회원가입 </span>
					<!-- 오른쪽 좋아요, SNS, 프린트 -->
					<span class="print_btn"></span>
					<span class="sns_n"></span>
					<span class="sns_k"></span>
					<span class="sns_t"></span>
					<span class="sns_f"></span>
					<span class="like_btn"></span>
				</div>
				<h4>회원가입</h4>
				<div class="sign_upbox">
					<div class="join_box">
						<form name="member_form" method="post" action="member_insert.php">
							<h3>회원가입을 위해 정보를 입력해 주세요.</h3>
							<div class="form id">
								<div class="col1">아이디</div>
								<div class="col2">
									<input type="text" name="id">
								</div>
								<div class="btn_check">
<<<<<<< HEAD
									<a href="#"><img src="images/check_id.png" 
=======
<<<<<<< HEAD
									<a href="#"><img src="images/check_id.png" 
=======
									<a href="#"><img src="./images/check_id.png"  height="22px"
>>>>>>> 4c57ecaa560babdae6721bd0c4e506d3281f658a
>>>>>>> be237eec3ab25fd2ac2850501993fd097b7aaee1
										onclick="check_id()"></a>
								</div>
							</div>
							<div class="clear"></div>

							<div class="form">
								<div class="col1">비밀번호</div>
								<div class="col2">
									<input type="password" name="pass">
								</div>
							</div>
							<div class="clear"></div>

							<div class="form">
								<div class="col1">비밀번호확인</div>
								<div class="col2">
									<input type="password" name="pass_confirm">
								</div>
							</div>
							<div class="clear"></div>

							<div class="form">
								<div class="col1">이름</div>
								<div class="col2">
									<input type="text" name="name">
								</div>
							</div>
							<div class="clear"></div>

							<div class="form email">
								<div class="col1">이메일</div>
								<div class="col2 email">
									<input type="text" name="email1"><span>@</span><input type="text" name="email2">
								</div>
							</div>
							<div class="clear"></div>
							<div class="buttons">
<<<<<<< HEAD
								<img style="cursor:pointer" src="images/btn_save.png" onclick="check_input()">&nbsp;
								<img id="reset_button" style="cursor:pointer" src="images/btn_cancle.png"
=======
<<<<<<< HEAD
								<img style="cursor:pointer" src="images/btn_save.png" onclick="check_input()">&nbsp;
								<img id="reset_button" style="cursor:pointer" src="images/btn_cancle.png"
=======
								<img style="cursor:pointer" src="./images/btn_save.png" height="22px" onclick="check_input()">&nbsp;
								<img id="reset_button" style="cursor:pointer" height="22px" src="./images/btn_cancle.png"
>>>>>>> 4c57ecaa560babdae6721bd0c4e506d3281f658a
>>>>>>> be237eec3ab25fd2ac2850501993fd097b7aaee1
									onclick="reset_form()">
							</div>
						</form>
					</div>
				</div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> be237eec3ab25fd2ac2850501993fd097b7aaee1
				<h4>SNS 회원 가입</h4>
				<div class="sns_signup">
					<a href="../index2.php"><img src="images/signup_naver.png" alt="SNS가입1"></a>
					<a href="../index2.php"><img src="images/signup_kakao.png" alt="SNS가입2"></a>
					<a href="../index2.php"><img src="images/signup_google.png" alt="SNS가입3"></a>
					<a href="../index2.php"><img src="images/signup_facebook.png" alt="SNS가입4"></a>
					<a href="../index2.php"><img src="images/signup_twitter.png" alt="SNS가입5"></a>
					<a href="../index2.php"><img src="images/signup_apple.png" alt="SNS가입6" width="264"></a>
<<<<<<< HEAD
=======
=======
				<h4>소셜계정으로 회원 가입</h4>
				<div class="sns_signup">
					<a href="http://bluestarim92.dothome.co.kr/project03/index2.php"><img src="images/signup_naver.png"></a>
					<a href="http://bluestarim92.dothome.co.kr/project03/index2.php"><img src="images/signup_kakao.png"></a>
					<a href="http://bluestarim92.dothome.co.kr/project03/index2.php"><img src="images/signup_google.png"></a>
					<a href="http://bluestarim92.dothome.co.kr/project03/index2.php"><img src="images/signup_facebook.png"></a>
					<a href="http://bluestarim92.dothome.co.kr/project03/index2.php"><img src="images/signup_twitter.png"></a>
>>>>>>> 4c57ecaa560babdae6721bd0c4e506d3281f658a
>>>>>>> be237eec3ab25fd2ac2850501993fd097b7aaee1
				</div>
			</div>
		</div>
	</div>