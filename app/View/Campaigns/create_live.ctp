<style type="text/css">

.background_img {
width: 100%;
height:200px;
background:url("../img/birthday.jpeg") no-repeat center;
background-size:cover;
margin-left : auto ;
margin-right : auto ;
}
#check {
    width:100px;
    display:block;
	margin:auto;
	padding-top: 30px;
	margin-top: 0px;
	margin-bottom: 0px;
	margin-right: auto;
	margin-left: auto;
}
#live-text {
	padding-top: 0px;
	font-size: 300%; 
	text-align: center;
	color:#ffffff;
}
.box {
	margin-left: 5%;
	margin-right: 5%
}

.project_title {
	color:#ff6600;
	margin-top: 10px;
	margin-bottom: 10px;
	text-align: center;	
}

.share_guide {
	color:#bababa;
	margin-top: 10px;
	margin-bottom: 10px;
	text-align: center;
}

.textarea-posision {
	margin-top: 40px;
}
</style>

<div data-role="page" data-theme="a">
	<!-- コンテンツの読み込み -->
  	<div role="main" class="ui-content upper_footer">

		<div class="background_img">
			<img src="../img/Yes_check.png" id="check">
			<div id="live-text">
				Fun Start!!
			</div>
		</div>
		<h4 class="project_title">小川陽子さんの誕生日プレゼント</h4>
		<h4 class="share_guide">のURLをグループにSHARE！</h4>
		<div class="box">
			<textarea class="textarea-posision">http://mory.weblike.jp/group_funding/campaigns/</textarea>
		</div>
	</div>
	<?php echo $this->element('start_share_footer'); ?>
</div>