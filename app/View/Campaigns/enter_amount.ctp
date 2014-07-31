<?php echo $this->Html->css('enter_amount');?>
<?php echo $this->Html->script('common');?>

<div data-role="page" data-theme="a" ontouchmove="event.preventDefault()">
<!-- モバイル用のヘーダーを読み込み -->
<?php echo $this->element('mobile_form_header'); ?>
	<!-- コンテンツの読み込み -->
  	<div role="main" class="ui-content under_header_login upper_footer">
    	<!--画像の読み込み-->
		<img src="../img/orange_ball.gif" width="20%" alt="icon" class="appIconBig"/>
		<!-- テキスト（大） -->
		<h4 class="login_description">小川陽子さんの誕生日プレゼント</h4>
		<h4 class="login_description">にFun!</h4>
		<!-- テキスト（小） -->
		<p class="login_description_small">この段階ではまだ決済されません</p>
		<hr class="horizon">

		<div class="box">
			<div data-role="fieldcontain">
				<form action="#" style="display:inline;">
					<label for='amount'>
						<?php if(isset($somethig)) {
							echo "800円をFunする";
						} else {	
							echo "Funしたい金額を入力してください！";
						}
						;?>					

						<?php if(isset($somethig)) {
							echo "";
						} else {	
							echo "<input type='range' name='amount' id='amount' value='800' min='800' max='8000'>";
						}
						;?>
				</form>
			</div>
			<button type="submit" id="orange_button">Fun!</button>
		</div>

  	</div>

</div>