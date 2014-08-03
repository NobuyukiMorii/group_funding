<?php echo $this->Html->script('common');?>

<style type="text/css">
.background_img {
	width: 100%;
	height:200px;
	background:url("<?=$this->Html->url('/Campaigns/image/'.h($data['Campaign']['id']))?>") no-repeat center;
	background-size:cover;
	margin-left : auto ;
	margin-right : auto ;
}
</style>

<div data-role="page" data-theme="a">

	<!-- コンテンツの読み込み -->
  	<div role="main" class="ui-content">

		<div class="background_img"></div>

		<!-- テキスト（大） -->
		<h4 class="login_description"><?php echo h($data['Campaign']['name']) ;?></h4>
		<!-- テキスト（小） -->
		<p class="login_description_small">この段階ではまだ決済されません</p>
		<hr class="horizon">
		<div class="box">
			<div data-role="fieldcontain">
				<form action="<?php echo $this->Html->url('detail/'.h($data['Campaign']['id'])) ;?>" style="display:inline;" method="post">
					<label for='amount'>
						<?php if(h($data['Campaign']['style']) == "uniform") {
							echo h($data['Campaign']['payment'])."円をFunする";
						} elseif (h($data['Campaign']['style']) == "optional"){	
							echo "金額を入力してください！（最大".h(number_format($data['Campaign']['capital_sum']))."円）";
						}
						;?>
						<?php if(h($data['Campaign']['style']) == "uniform") {
							echo "<input type='hidden' name='data[Fund][amount]' value=".h($data['Campaign']['payment'])." >";
						} elseif (h($data['Campaign']['style']) == "optional"){		
							echo "<input type='range' name='data[Fund][amount]' id='amount' value=".h($data['Campaign']['payment'])." min=".h($data['Campaign']['payment'])." max=".h($data['Campaign']['capital_sum']).">";
						}
						;?>
						<input type="hidden" name="data[Fund][user_id]" value="<?php echo h($data['Campaign']['user_id']) ;?>" name="user_id">
						<input type="hidden" name="data[Fund][campaign_id]" value="<?php echo h($data['Campaign']['id']) ;?>" name="campaign_id">
						<button type="submit" id="orange_button">Fun!</button>
				</form>
			</div>
			
		</div>

  	</div>

</div>