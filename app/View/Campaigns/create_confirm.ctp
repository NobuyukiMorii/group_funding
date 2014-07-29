<style type="text/css">

.background_img {
width: 100%;
height:200px;
background:url("../img/birthday.jpeg") no-repeat center;
background-size:cover;
margin-left : auto ;
margin-right : auto ;
}
#user {
    width:50px;
    height:50px;
    border-radius:100px;
    background:url("../img/face.jpg");
    background-repeat:no-repeat;
    z-index:1000;
}
#name {
	position: absolute;
	margin-top: -33px;
	margin-left: 60px;
	color:#ffffff;
}

.box {
	margin-left: 5%;
	margin-right: 5%
}

.project_title {
	color:#333333;
	margin-top: 10px;
	margin-bottom: 10px;
	text-align: center;
}
.percentage {
	color: #ff6600;
	margin-top: 0px;
	margin-bottom: 3px;
}
.gray_bar {
    width: 100%;
    height: 5px;
    margin-top: 0px;
    margin-bottom: 0px;
    background-color: #bababa;
    border-radius: 2.5px 2.5px 2.5px 2.5px / 2.5px 2.5px 2.5px 2.5px;
}

.orange_bar {
    width: 0%;
    height: 5px;
    margin-top: -5px;
    margin-bottom: 0px;
    background-color: #ff6600;
    border-radius: 2.5px 2.5px 2.5px 2.5px / 2.5px 2.5px 2.5px 2.5px;
}

.clock-icon {
	width: 20px;
	height: 20px;
	background:url("../img/icons-png/clock-black.png") no-repeat center;
	margin-top: 10px;
}

.rest-time {
	margin-top: -18px;
	margin-left: 25px;
	color: #bababa;
}

.collect-money {
	text-align: right;
	margin-top: -38.8px;
	margin-bottom: 0px;
	color: #bababa;
}

hr {
	height: 1px;
	background-color: #bababa;
	border: none;
	color: #bababa;
	margin-top: 15px;
	margin-bottom:15px;
}

.detail {
	color: #bababa;
	margin-top: 0px;
	margin-bottom:0px;
}

.heigh-light {
	color: #ff6600;
	display: inline;
}

.activity-box {
	margin-top: 10px;
	margin-bottom: 0px;
	min-height: 100px;
	background-color: #bababa;
}

.activity-count {
	color: #ff6600;
	text-align: center;
	margin-top: 0px;
}

#done {
	background-color: #ff6600;
	border-color: #ece9e9;
	color: #ffffff;
	text-shadow: 0;
}

.position-center {
	text-align: center;
}

</style>

<div data-role="page" data-theme="a">
	<!-- モバイル用のヘーダーを読み込み -->
<?php echo $this->element('mobile_header'); ?>
	<!-- コンテンツの読み込み -->
  	<div role="main" class="ui-content under_header_create upper_footer">

		<div class="background_img"></div>
		<div id="user" style="margin : -50px 0px 0px 0px"></div><div id="name">前川千里</div>
		
		<div class="box">
			<h4 class="project_title">小川陽子さんの誕生日プレゼント</h4>

			<h5 class="percentage">0%</h5>
	    	<div class="gray_bar"></div>
			<div class="orange_bar"></div>
			
			<div class="clock-icon"></div>
			<h6 class="rest-time">残り7日</h6>
			<h6 class="collect-money">合計：6,000円</h6>
		</div>
		<hr>
		<div class="box">
			<h5 class="detail">私は<div class="heigh-light">小川陽子さんの誕生日プレゼント</div>のためにお金を集めています。そのために、最低<div class="heigh-light">5,000円</div>のお金が必要です。みんなには１人<div class="heigh-light">500円</div>か、それ以上のFun！をお願いします。期限は<div class="heigh-light">8月4日</div>です。</h5>
		</div>
		<div class="activity-box">
			<h5 class="activity-count">Fun!の履歴：0回</h5>
		</div>
	  	<!-- フッターの読み込み -->
	  	<div data-id="common_footer" data-role="footer" data-position="fixed" data-fullscreen="true" data-position="inline" class="position-center">
				<button type="submit" id="done"/>もどる</button>
		</div>

	</div>
</div>