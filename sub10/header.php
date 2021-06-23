<?php
	define('DBuser', 'bluestarim92');
	define('DBpass', 'ay2111!!');
	define('DBname', 'bluestarim92');

	session_start();
	if(isset($_SESSION['userid'])) $userid = $_SESSION['userid'];
	else $userid = "";
	if(isset($_SESSION['username'])) $username = $_SESSION['username'];
	else $username = "";
	if(isset($_SESSION['userlevel'])) $userlevel = $_SESSION['userlevel'];
	else $userlevel = "";
	if(isset($_SESSION['userpoint'])) $userpoint = $_SESSION['userpoint'];
	else $userpoint = "";
?>
<div id="header">
	<div class="headerwrap">
		<a href="../index2.php"><div class="logo"></div></a>
		<div class="search_box">
			<input type="text" id="search_bar" name="search_bar" class="guideText" value="검색어를 입력하세요"/>
			<a href="#" class="btn_search_box">
				<img src="../images/btn_gnbSch.png" alt="검색버튼"/>
			</a>
		</div>
		<div class="gnb">
			<ul>
<?php  
	if(!$userid) {
?>	
				<li class="gnb_icon1"><a href="../sub9/member_form.php">회원가입</a></li>
				<li class="gnb_icon2"><a href="../sub6/login_form.php">로그인</a></li>
<?php 	
	} else {
		$logged = $username."(".$userid.")님[Level:".$userlevel.", Point:".$userpoint."]";
?>
				<li class="gnb_icon1"><a href="../sub9/member_modify_form.php">정보수정</a></li>
				<li class="gnb_icon2"><a href="../logout.php">로그아웃</a></li>
<?php
	}
?>
				<li class="gnb_icon3"><a href="https://www.nec.go.kr/site/abroad/main.do">재외선거</a></li>
				<li class="gnb_icon4"><a href="https://www.nec.go.kr/site/sn/main.do">미래유권자</a></li>
				
<?php
	if($userlevel==1){
?>
				<li><a href="admin.php">관리자 모드</a></li>
<?php
	}
?>				
				<li class="eng"><a href="https://www.nec.go.kr/site/eng/main.do"><span class="english">English</span></a></li>
			</ul>
		</div>
	</div>
</div>	
<div id="nav">
	<div class="one_inner">
		<ul class="one_depth">
			<li class="nav_1"><a href="../sub1/sub1.html" class="tooltip" tabindex="1" title="질의·신고제보는 여기에서">국민참여소통</a>
				<div class="two_inner1">
					<div class="left_nav_icon1">
						<div class="icon_1 cf"><img src="../images/bg_gnb_icon1.png" alt=""/></div>
						<span class="icon_1_span">국민참여소통</span>
						</div>
						<div class="two_depth cf">
							<dl>
								<div class="line_b">
									<dt><a href="../sub6/sub6.html">질의·신고</a></dt>
									<dd><a href="../sub1/sub1.html">정치관계법질의</a></dd>
									<dd><a href="../sub2/sub2.html">정치관계법 위반행위신고</a></dd>
									<dd><a href="../sub3/sub3.html">예산낭비신고</a></dd>
									<dd><a href="../sub4/sub4.html">사이버감사실</a></dd>
									<dd><a href="../sub5/sub5.html">인터넷언론사 선거보도 이의신청</a></dd>
									<dd><a href="../sub6/sub6.html">불공정 여론조사 신고</a></dd>
									<dd><a href="../sub1/sub1.html">홈페이지 개선</a></dd>
									<dd><a href="../sub4/sub4.html">자유의견</a></dd>
								</div>
							</dl>	
							<dl>										
								<div class="line_b">
									<dt><a href="../sub5/sub5.html">정보공개청구</a></dt>
									<dd><a href="../sub2/sub2.html">정보공개제도</a></dd>
									<dd><a href="../sub4/sub4.html">정보목록</a></dd>
									<dd><a href="../sub6/sub6.html">사전공표목록</a></dd>
									<dd><a href="../sub3/sub3.html">정보공개도우미</a></dd>
									<dd><a href="../sub1/sub1.html">정보공개청구</a></dd>
								</div>
							</dl>
							<dl>
								<div class="line_b">
									<dt><a href="../sub4/sub4.html">세입·세출 현황</a></dt>
									<dd><a href="../sub1/sub41.html">세입·세출사업별 설명자료 보기</a></dd>
									<dd><a href="../sub3/sub3.html">세입·세출 현황 보기</a></dd>
								</div>
							</dl>
							<dl>
								<div class="line_b">
									<dt><a href="../sub6/sub6.html">공직자윤리위원회</a></dt>
									<dd><a href="../sub4/sub4.html">취업이력 공시</a></dd>
								</div>
							</dl>
										
							<dl>
								<div class="line_b">
									<dt><a href="../sub3/sub3.html">민주시민교육</a></dt>
									<dd><a href="../sub6/sub6.html">연수계획</a></dd>
									<dd><a href="../sub4/sub4.html">월별연수일정</a></dd>
									<dd><a href="../sub2/sub2.html">연수신청</a></dd>
									<dd><a href="../sub5/sub5.html">사이버연수</a></dd>
									<dd><a href="../sub1/sub1.html">외국인선거관계자 연수</a></dd>
								</div>
							</dl>
								
							<dl>
								<div class="line_b">
									<dt><a href="../sub6/sub6.html">개인정보보유현황</a></dt>
									<dd><a href="../sub3/sub3.html">개인정보보유현황</a></dd>
								</div>
							</dl>
						</div>
						
					</div>
				</li>
				<li class="bar">|</li>
				<!-- <li class="bar">|</li> -->
				<li class="nav_2"><a href="../sub7/sub7.html" class="tooltip" tabindex="2" title="위원회의 소식과 정보를 한곳에">알림</a>
					<div class="two_inner2">
						<div class="left_nav_icon2">
							<div class="icon_2"></div>
							<span class="icon_2_span">알림</span>
						</div>
						<div class="two_depth cf">
							<dl>
								<div class="line_b">
									<dt><a href="../sub2/sub2.html">위원회소식</a></dt>
									<dd><a href="../sub2/sub2.html">위원회소식</a></dd>
									<dd><a href="../sub4/sub4.html">공지</a></dd>
									<dd><a href="../sub5/sub5.html">공고</a></dd>
									<dd><a href="../sub1/sub1.html">채용</a></dd>
								</div>
							</dl>	
							<dl>
								<div class="line_b">
									<dt><a href="../sub4/sub4.html">보도자료</a></dt>
									<dd><a href="../sub6/sub6.html">보도자료</a></dd>
									<dd><a href="../sub3/sub3.html">해명·안내자료</a></dd>
									<dd><a href="../sub5/sub5.html">팩트체크</a></dd>
									<dd><a href="../sub1/sub1.html">e-선거정보</a></dd>
								</div>
							</dl>
							<dl>
								<div class="line_b">
									<dt><a href="../sub3/sub3.html">기사·영상</a></dt>
									<dd><a href="../sub2/sub2.html">언론기사</a></dd>
									<dd><a href="../sub5/sub5.html">언론 영상</a></dd>
								</div>
							</dl>
							<dl>
								<div class="line_b">
									<dt><a href="../sub4/sub4.html">스토리 텔링</a></dt>
									<dd><a href="../sub2/sub2.html">스토리 텔링</a></dd>
									<dd><a href="../sub1/sub1.html">요모조모</a></dd>
								</div>
							</dl>
						</div>
					</div>
				</li>
				<li class="bar">|</li>
				<li class="nav_3"><a href="../sub3/sub3.html" tabindex="3" class="tooltip" title="각종 선거정보를 한눈에">분야별정보</a>
					<div class="two_inner3">
						<div class="left_nav_icon3">
							<div class="icon_3"></div>
							<span class="icon_3_span">분야별정보</span>
						</div>
						<div class="two_depth cf">
							<dl>
								<div class="line_b">
									<dt><a href="../sub2/sub2.html">선거정보</a></dt>
									<dd><a href="../sub2/sub2.html">선거통계</a></dd>
									<dd><a href="../sub4/sub4.html">역대선거통계</a></dd>
									<dd><a href="../sub5/sub5.html">투표율 정보</a></dd>
									<dd><a href="../sub1/sub1.html">공직선거제도</a></dd>	
									<dd><a href="../sub3/sub3.html">사전투표제도</a></dd>	
									<dd><a href="../sub2/sub2.html">선상투표제도</a></dd>	
									<dd><a href="../sub1/sub1.html">위탁선거제도</a></dd>	
									<dd><a href="../sub5/sub5.html">선거일정</a></dd>	
									<dd><a href="../sub3/sub3.html">선거장비·물품 중장기 발주 일정표</a></dd>	
									<dd><a href="../sub6/sub6.html">선거장비·물품 표준 및 조달일정</a></dd>
								</div>
							</dl>	
							<dl>
								<div class="line_b">
									<dt><a href="../sub4/sub4.html">재외선거</a></dt>
									<dd><a href="../sub6/sub46.html">공지</a></dd>
									<dd><a href="../sub3/sub3.html">보도자료</a></dd>
									<dd><a href="../sub5/sub5.html">재외선거제도</a></dd>
									<dd><a href="../sub1/sub1.html">재외선거 홍보자료</a></dd>
									<dd><a href="../sub3/sub3.html">자료실</a></dd>
								</div>
							</dl>
							<dl>
								<div class="line_b">
									<dt><a href="../sub3/sub3.html">선거법령정보</a></dt>
									<dd><a href="../sub2/sub2.html">법령검색</a></dd>
									<dd><a href="../sub5/sub5.html">질의검색</a></dd>
									<dd><a href="../sub4/sub4.html">판례</a></dd>
								</div>
							</dl>
							<dl>
								<div class="line_b">
									<dt><a href="../sub4/sub4.html">정책·공약알리미</a></dt>
									<dd><a href="../sub2/sub2.html">희망공약 제안</a></dd>
									<dd><a href="../sub1/sub1.html">정책·공약 보기</a></dd>
									<dd><a href="../sub3/sub3.html">정책선거란?</a></dd>
								</div>
							</dl>
							<dl>
								<div class="line_b">
									<dt><a href="../sub5/sub5.html">정당·정치자금</a></dt>
									<dd><a href="../sub6/sub6.html">정당정보</a></dd>
									<dd><a href="../sub4/sub4.html">강령·당헌</a></dd>
									<dd><a href="../sub3/sub3.html">정치자금제도</a></dd>
									<dd><a href="../sub5/sub5.html">후원회등록절차</a></dd>
									<dd><a href="../sub6/sub6.html">정치후원금이란?</a></dd>
									<dd><a href="../sub3/sub3.html">기탁금기부</a></dd>
									<dd><a href="../sub8/sub8.html">후원금 기부</a></dd>
								</div>
							</dl>
							<dl>
								<div class="line_b">
									<dt><a href="../sub7/sub7.html">미래유권자</a></dt>
									<dd><a href="../sub1/sub1.html">선거관리위원회는?</a></dd>
									<dd><a href="../sub2/sub2.html">선거아카데미</a></dd>
									<dd><a href="../sub3/sub3.html">학교선거도우미</a></dd>
									<dd><a href="../sub5/sub5.html">교육프로그램</a></dd>
									<dd><a href="../sub8/sub8.html">학습자료실</a></dd>
								</div>
							</dl>
									
							<dl>
								<div class="line_b">
									<dt><a href="../sub4/sub4.html">기타정보</a></dt>
									<dd><a href="../sub1/sub1.html">선거방송토론</a></dd>
									<dd><a href="../sub2/sub2.html">선거여론조사</a></dd>
									<dd><a href="../sub3/sub3.html">인터넷선거보도심의</a></dd>
									<dd><a href="../sub5/sub5.html">A-WEB(세계선거기관협의회)</a></dd>
									<dd><a href="../sub7/sub7.html">온라인투표(K-VOTING)</a></dd>
									<dd><a href="../sub2/sub2.html">국회의원선거구획정위원회</a></dd>
								</div>
							</dl>
						</div>
					</div>
				</li>
				<li class="bar">|</li>
				<li class="nav_4"><a href="../sub4/sub4.html" class="tooltip" tabindex="4" title="각종 서식과 자료들을 한눈에">통합자료실</a>
					<div class="two_inner4">
						<div class="left_nav_icon4">
							<div class="icon_4"></div>
							<span class="icon_4_span">통합자료실</span>
						</div>
						<div class="two_depth cf">
						<dl>
							<div class="line_b">
								<dt><a href="../sub3/sub3.html">선거자료</a></dt>
								<dd><a href="../sub3/sub3.html">선거·정당·정치자금</a></dd>
								<dd><a href="../sub1/sub1.html">정치관계법 개정의견</a></dd>
								<dd><a href="../sub3/sub3.html">간행물</a></dd>
								<dd><a href="../sub8/sub8.html">연구(외부)자료</a></dd>	
								<dd><a href="../sub5/sub5.html">선거연구 학술지</a></dd>	
								<dd><a href="../sub4/sub4.html">각종서식</a></dd>	
								<dd><a href="../sub3/sub3.html">기타자료</a></dd>	
								<dd><a href="../sub2/sub2.html">연구과제신청</a></dd>
							</div>
						</dl>	
						<dl>
							<div class="line_b">
								<dt><a href="../sub2/sub2.html">홍보자료</a></dt>
								<dd><a href="../sub1/sub1.html">영상</a></dd>
								<dd><a href="../sub8/sub8.html">이미지</a></dd>
								<dd><a href="../sub5/sub5.html">웹툰</a></dd>
								<dd><a href="../sub2/sub2.html">이슈카드</a></dd>
							</div>
						</dl>	
						<dl>
							<div class="line_b">
								<dt><a href="../sub3/sub3.html">재외선거홍보자료</a></dt>
								<dd><a href="../sub2/sub2.html">영상</a></dd>
								<dd><a href="../sub8/sub8.html">이미지</a></dd>
								<dd><a href="../sub5/sub5.html">이슈카드</a></dd>
							</div>
						</dl>										
						<dl>
							<div class="line_b">
								<dt><a href="../sub4/sub4.html">민주시민교육자요</a></dt>
								<dd><a href="../sub1/sub1.html">기본콘텐츠</a></dd>
								<dd><a href="../sub2/sub2.html">맞춤형콘텐츠</a></dd>
								<dd><a href="../sub3/sub3.html">연수프로그램콘텐츠</a></dd>
								<dd><a href="../sub4/sub4.html">기타자료</a></dd>
							</div>
						</dl>
						<dl>
							<div class="line_b">
								<dt><a href="../sub5/sub5.html">선거정보도서관</a></dt>
								<dd><a href="../sub2/sub2.html">소장자료</a></dd>
								<dd><a href="../sub1/sub1.html">전자정보자료</a></dd>
								<dd><a href="../sub3/sub3.html">역대 후보자 공보·벽보</a></dd>
								<dd><a href="../sub4/sub4.html">e-book</a></dd>
								<dd><a href="../sub5/sub5.html">사이버선거역사관</a></dd>
								<dd><a href="../sub6/sub6.html">대한민국 선거사</a></dd>
								<dd><a href="../sub1/sub1.html">선거체험관</a></dd>
							</div>
						</dl>
					</div>
				</div>
			</li>
			<li class="bar">|</li>
			<li class="nav_5"><a href="../sub5/sub5.html" tabindex="5" class="tooltip" title="우리 위원회는 어떤 곳인가요?">위원회소개</a>
				<div class="two_inner5">
					<div class="left_nav_icon5">
						<div class="icon_5"></div>
						<span class="icon_5_span">위원회소개</span>
					</div>
					<div class="two_depth cf">
						<dl>
							<div class="line_b">
								<dt><a href="../sub4/sub4.html">개요</a></dt>
								<dd><a href="../sub4/sub4.html">위원장 인사말</a></dd>
								<dd><a href="../sub3/sub3.html">지위 및 연혁</a></dd>
								<dd><a href="../sub2/sub2.html">임무와 비전</a></dd>
								<dd><a href="../sub1/sub1.html">업무 범위</a></dd>	
								<dd><a href="../sub5/sub5.html">주요업무계획</a></dd>
							</div>
						</dl>	
						<dl>	
							<div class="line_b">
								<dt><a href="../sub1/sub1.html">위원장, 상임위원 및 위원</a></dt>
								<dd><a href="../sub6/sub6.html">위원장소개</a></dd>
								<dd><a href="../sub3/sub3.html">상임위원소개</a></dd>	
								<dd><a href="../sub5/sub5.html">위원소개</a></dd>	
							</div>
						</dl>	
						<dl>
							<div class="line_b">
								<dt><a href="../sub3/sub3.html">조직안내</a></dt>
								<dd><a href="../sub1/sub1.html">조직구성</a></dd>
								<dd><a href="../sub2/sub2.html">중앙</a></dd>
								<dd><a href="../sub3/sub3.html">시·도</a></dd>
								<dd><a href="../sub4/sub4.html">구·시·군</a></dd>
								<dd><a href="../sub5/sub5.html">읍·면·동</a></dd>
								<dd><a href="../sub6/sub6.html">재외</a></dd>
								<dd><a href="../sub1/sub1.html">전화번호</a></dd>
							</div>
						</dl>
						<dl>
							<div class="line_b">
								<dt><a href="../sub4/sub4.html">위원회상징 및 홍보대사</a></dt>
								<dd><a href="../sub2/sub2.html">CI</a></dd>
								<dd><a href="../sub1/sub1.html">캐릭터</a></dd>
								<dd><a href="../sub2/sub2.html">홍보대사</a></dd>
							</div>
						</dl>
						<dl>
							<div class="line_b">
								<dt><a href="../sub5/sub5.html">찾아오시는길</a></dt>
								<dd><a href="../sub1/sub1.html">과천청사</a></dd>
								<dd><a href="../sub2/sub2.html">관악청사</a></dd>
							</div>
						</dl>										
						<dl>
							<div class="line_b">
								<dt><a href="../sub6/sub6.html">방문안내</a></dt>
								<dd><a href="../sub4/sub4.html">방문정보</a></dd>
								<dd><a href="../sub1/sub1.html">방문신청</a></dd>
								<dd><a href="../sub5/sub5.html">갤러리</a></dd>
							</div>
						</dl>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>