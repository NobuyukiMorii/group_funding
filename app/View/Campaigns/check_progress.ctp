<?php echo $this->Html->css('activity-responsive-table');?>
<?php echo $this->Html->css('check_progress');?>

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
		<hr class="horizon">
		<div class="box">

			<table class="table table-striped table-responsive">
			    <thead>
			        <tr>
			            <th>プロジェクト名</th>
			            <th>期限</th>
			            <th>支払最小額</th>
			            <th>目標金額（最小）</th>
			            <th>目標金額（最大）</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>小川陽子さんの誕生日プレゼント（iPhoneカバー）</td>
			            <td>8月8日</td>
			            <td>500円</td>
			            <td>5,000円</td>
			            <td>8,000円</td>
			        </tr>
			    </tbody>
			</table>

			<h5 class="detail">小川陽子さんの誕生日プレゼントにiPhoneカバーを買ってあげたいと思います！よーこは最近iPhoneを買ってカバーが欲しいみたいなので、プレゼントで渡してあげたいと思います。だいたい5,000円くらいで買えるので、１人500円からでお願いします！よーこには内緒にしてね！</h5>
		</div>
		<hr class="horizon">
		<div class="box2">
			<form>
				<input type="text" value="" data-mini=“true”>
				<button type="submit" id="post_button">投稿する</button>
			</form>

			<h5 class="activity-count">アクティビティー 5回</h5>
			<div class="activity-box">
				<div class="left-box">
					<p><div id="contributer-face"></div></p>
				</div>
				<div class="right-box">
					<p><div class="contributer-name">前川千里</div></p>
					<p><div class="activity-content">プロジェクトをスタートしました！</div></p>
				</div>
			</div>
		</div>


	  	<!-- フッターの読み込み -->
	  	<div data-id="common_footer" data-role="footer" data-position="fixed" data-fullscreen="true" data-position="inline" class="position-center">
				<button type="submit" id="done"/>Fun</button>
		</div>

	</div>
</div>