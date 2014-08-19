<meta charset="UTF-8">
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
		<div class="box5">
			<textarea class="textarea-posision">http://mory.weblike.jp<?php echo $this->Html->url('Campaigns/detail'.$data['Campaign']['id']);?></textarea>
		</div>
		<a href="http://www.facebook.com/sharer.php?u=`http://mory.weblike.jp/group_funding/Campaigns/create_live`&amp;t=`Group Fun!`"
		onClick="window.open(encodeURI(decodeURI(this.href)),'sharewindow','width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!'
	      ); return false;"data-role="button">
	    Facebookでshare
		</a>
		<a href="<?php echo $this->Html->url("/Campaigns/home") ;?>" rel="external" data-role="button">トップ画面に戻る</a>

	</div>

</div>