<div data-role="page" data-theme="a">
<!-- モバイル用のヘーダーを読み込み -->
<?php echo $this->element('mobile_form_header'); ?>
	<!-- コンテンツの読み込み -->
  	<div role="main" class="ui-content under_header upper_footer">
    	<!--画像の読み込み-->
		<img src="../img/orange_ball.gif" width="30%" alt="icon" class="appIconBig"/>
		<!-- テキスト（大） -->
		<h2 class="login_description">Group Funをはじめる</h2>
		<!-- テキスト（小） -->
		<h6 class="login_description_small">既に会員登録している人はこちらから<a href="">ログイン</a></h6>
		<!-- フォーム -->
		<form action="" method="post" class="login_form_mobile">
			<fieldset>
				<input type="text" name="name" placeholder="email address" value="" />
				<input type="text" name="name" placeholder="password" value="" />
				<button type="submit" name="submit" data-inline="true" >サインアップ</button>
			</fieldset>
		</form>
		<!-- パスワードを忘れたとき -->
		<a href=""><h6 class="login_description_small">パスワードを忘れた方はこちら</h6></a>
  	</div>

</div>