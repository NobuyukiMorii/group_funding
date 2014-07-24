<div data-role="page" data-theme="a">
	<!-- モバイル用のヘーダーを読み込み -->
<?php echo $this->element('mobile_header'); ?>
	<!-- コンテンツの読み込み -->
  	<div role="main" class="ui-content under_header upper_footer_pre_login">
  		<div class="ui-body ui-body-a content">
    		<?php echo $this->element('world'); ?>
  		</div>
    </div>
  	<!-- フッターの読み込み -->
  	<?php echo $this->element('mobile_footer_pre_login'); ?>
</div>