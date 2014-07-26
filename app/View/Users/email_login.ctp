<?php echo $this->Html->script('common');?>

<form name="form" id="confirm_address" method="post" action="<?php $this->Html->url('/controller/action/', true); ?>">
  <input id="mail_address" type="hidden" name="mail_address" />
</form>

<div data-role="page" data-theme="a" ontouchmove="event.preventDefault()">
<!-- モバイル用のヘーダーを読み込み -->
<?php echo $this->element('mobile_form_header'); ?>
	<!-- コンテンツの読み込み -->
  	<div role="main" class="ui-content under_header_login upper_footer">
    	<!--画像の読み込み-->
		<img src="../img/orange_ball.gif" width="20%" alt="icon" class="appIconBig"/>
		<!-- テキスト（大） -->
		<h2 class="login_description">Group Funにログイン</h2>
		<!-- テキスト（小） -->
		<p class="login_description_small">サインアップは<a href="">こちら</a>から</p>
		<!-- フォーム -->
		<form action="" method="post" class="login_form_mobile">
			<fieldset>
				<input type="text" name="name" placeholder="email address" value="" />
				<input type="text" name="name" placeholder="password" value="" />
				<button type="submit" name="submit" data-inline="true" id="orange_button">ログイン</button>
			</fieldset>
		</form>
		<!-- パスワードを忘れたとき -->
		<div onClick="disp()"><h6 class="forget_password_guide">パスワードを忘れた？</h6></div>
  	</div>

</div>