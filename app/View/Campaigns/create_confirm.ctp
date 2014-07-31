<?php echo $this->Html->css('responsive-table');?>
<?php echo $this->Html->css('create_confirm');?>

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
		<div class="box2">

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
			            <td>小川陽子さんの誕生日プレゼント（ヘッドフォン）</td>
			            <td>8月8日</td>
			            <td>500円</td>
			            <td>5,000円</td>
			            <td>8,000円</td>
			        </tr>
			    </tbody>
			</table>

			<h5 class="detail">小川陽子さんの誕生日プレゼントにヘッドフォンを買ってあげたいと思います！よーこ最近愛用のイヤホンなくして、次はヘッドフォン欲しいみたいなので、プレゼントで渡してあげたいと思います。安いものだとだいたい5,000円くらいで買えるので、１人500円からでお願いします！よーこには内緒にしてね！</h5>
		</div>
	  	<!-- フッターの読み込み -->
	  	<div data-id="common_footer" data-role="footer" data-position="fixed" data-fullscreen="true" data-position="inline" class="position-center">
				<button type="submit" id="done"/>もどる</button>
		</div>

	</div>
</div>