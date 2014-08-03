<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=828906960467092&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

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
	<!-- コンテンツの読み込み -->
  	<div role="main" class="ui-content upper_footer">

		<div class="background_img">
			<img src="../img/Yes_check.png" class="check">
			<div id="live-text">
				Fun Start!!
			</div>
		</div>
		<h4 class="project_title"><?php echo h($data['Campaign']['name']);?></h4>
		<h4 class="share_guide">のURLをグループにSHARE！</h4>
		<div class="box">
			<textarea class="textarea-posision">http://mory.weblike.jp/group_funding/campaigns/</textarea>
		</div>

	</div>

	<?php echo $this->element('start_share_footer'); ?>
</div>