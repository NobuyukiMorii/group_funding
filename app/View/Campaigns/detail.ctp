<style type="text/css">
.background_img {
width: 100%;
height:200px;
background:url("<?=$this->Html->url('/Campaigns/image/'.$data['Campaign']['id'])?>") no-repeat center;
background-size:cover;
margin-left : auto ;
margin-right : auto ;
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
    width: <?php echo h($current['rate_for_figure']) ;?>%;
    height: 5px;
    margin-top: -5px;
    margin-bottom: 0px;
    background-color: #ff6600;
    border-radius: 2.5px 2.5px 2.5px 2.5px / 2.5px 2.5px 2.5px 2.5px;
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
			<h4 class="project_title"><?php echo h($data['Campaign']['name']);?></h4>

			<h5 class="percentage"><?php echo h($current['rate']) ;?>%</h5>

	    	<div class="gray_bar"></div>
			<div class="orange_bar"></div>
			
			<div class="clock-icon"></div>
			<h6 class="rest-time">残り<?php echo $this->Common->calculate($data['Campaign']['time_limit']) ;?>日</h6>
			<h6 class="collect-money">目標（最低）：<?php echo h(number_format($data['Campaign']['small_sum']));?>円</h6>
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
			            <td><?php echo h($data['Campaign']['name']);?></td>
			            <td><?php echo h(date('Y年m月d日', strtotime($data['Campaign']['time_limit'])));?></td>
			            <td><?php echo h(number_format($data['Campaign']['payment']));?>円</td>
			            <td><?php echo h(number_format($data['Campaign']['small_sum']));?>円</td>
			            <td><?php echo h(number_format($data['Campaign']['capital_sum']));?>円</td>
			        </tr>
			    </tbody>
			</table>

			<h5 class="detail"><?php echo h($data['Campaign']['description']);?></h5>
		</div>
		<hr class="horizon">
		<div class="box2">

			<form action="<?php echo $this->Html->url('detail/'.h($data['Campaign']['id'])) ;?>" method="post">
				<input type="hidden" name="data[Comment][user_id]" value="" >
				<input type="hidden" name="data[Comment][campaign_id]" value="<?php echo h($data['Campaign']['id']);?>" >
				<textarea name="data[Comment][content]"></textarea>
				<button type="submit" id="post_button">投稿する</button>
			</form>

			<h5 class="activity-count">アクティビティー <?php echo count($fund_data) ;?>回</h5>

			<?php foreach ($comment_data as $key => $value){ ?>
			<div class="activity-box2">
				<div class="left-box">
					<p><div id="contributer-face"></div></p>
				</div>
				<div class="right-box">
					<p><div class="contributer-name">Who</div></p>
					<p><div class="activity-content"><?php echo $comment_data[$key]['Comment']['content'] ;?></div></p>
					<p><div class="activity-content"><?php echo h(date('Y/m/d H:i:s', strtotime($comment_data[$key]['Comment']['created'])));?></div></p>	
				</div>
			</div>
			<?php } ?>

			<?php foreach ($fund_data as $key => $value){ ?>
			<div class="activity-box2">
				<div class="left-box">
					<p><div id="contributer-face"></div></p>
				</div>
				<div class="right-box">
					<p><div class="contributer-name">Who</div></p>
					<p><div class="activity-content"><?php echo h($fund_data[$key]['Fund']['amount']) ;?>円投資しました</div></p>
					<p><div class="activity-content"><?php echo h(date('Y/m/d H:i:s', strtotime($fund_data[$key]['Fund']['created'])));?></div></p>	
				</div>
			</div>
			<?php } ?>

			<div class="activity-box2">
				<div class="left-box">
					<p><div id="contributer-face"></div></p>
				</div>
				<div class="right-box">
					<p><div class="contributer-name">前川千里</div></p>
					<p><div class="activity-content">プロジェクトをスタートしました！</div></p>
					<p><div class="activity-content"><?php echo h(date('Y/m/d H:i:s', strtotime($data['Campaign']['created'])));?></div></p>	
				</div>
			</div>
			<a href="<?=$this->Html->url('/Campaigns/enter_amount/'.$data['Campaign']['id'])?>" rel="external" data-role="button" id="post_button">Funする</a>

		</div>
	</div>
</div>