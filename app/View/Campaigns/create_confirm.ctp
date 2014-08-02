<?php echo $this->Html->css('responsive-table');?>
<?php echo $this->Html->css('create_confirm');?>

<style type="text/css">
.background_img {
width: 100%;
height:200px;
background:url("<?php echo $this->Html->url('/Campaigns/display_image'); ?>") no-repeat center;
background-size:cover;
margin-left : auto ;
margin-right : auto ;
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
			<h4 class="project_title"><?php echo h($this->request->data['Campaign']['name']);?></h4>

			<h5 class="percentage">0%</h5>
	    	<div class="gray_bar"></div>
			<div class="orange_bar"></div>
			
			<div class="clock-icon"></div>
			<h6 class="rest-time">残り<?php echo $this->Common->calculate($this->request->data['Campaign']['time_limit']) ;?>日</h6>
			<h6 class="collect-money">合計：<?php echo h(number_format($this->request->data['Campaign']['small_sum']));?>円</h6>
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
			            <td><?php echo h($this->request->data['Campaign']['name']);?></td>
			            <td><?php echo h(date('Y年m月d日', strtotime($this->request->data['Campaign']['time_limit'])));?></td>
			            <td><?php echo h(number_format($this->request->data['Campaign']['payment']));?>円</td>
			            <td><?php echo h(number_format($this->request->data['Campaign']['small_sum']));?>円</td>
			            <td><?php echo h(number_format($this->request->data['Campaign']['capital_sum']));?>円</td>
			        </tr>
			    </tbody>
			</table>

			<h5 class="detail"><?php echo h($this->request->data['Campaign']['description']);?></h5>
		</div>
	  	<!-- フッターの読み込み -->
	  	<div data-id="common_footer" data-role="footer" data-position="fixed" data-fullscreen="true" data-position="inline" class="position-center">
				<a href="<?php echo $this->Html->url("/Campaigns/create_live") ;?>">確定する</a>
		</div>

	</div>
</div>