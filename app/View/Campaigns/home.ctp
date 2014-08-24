<div data-role="page" data-theme="a">
	<!-- モバイル用のヘーダーを読み込み -->
<?php echo $this->element('mobile_header'); ?>
	<!-- コンテンツの読み込み -->
  	<div role="main" class="ui-content under_header upper_footer">
    	<!--タブパネル全体を定義-->
    	<div data-role="tabs">
      	<!--タブリストを準備-->
      		<div data-role="navbar" class="margin_bottom_nav tab_fixed">
        		<ul>
        			<li><a href="#world" class="ui-btn-active">みんな</a></li>
          			<li><a href="#following">友達</a></li>
        		</ul>
      		</div>
      	<!--パネル（コンテンツ領域）を準備-->
      		<div id="world" class="ui-body ui-body-a content">
        		<?php echo $this->element('world'); ?>
      		</div>

      		<div id="following" class="ui-body ui-body-a">
        		<?php echo $this->element('following'); ?>
            <?php pr($myFbData) ;?>
            <?php pr($friendsFbData) ;?>
      		</div>
    	</div>
  	</div>
  	<!-- フッターの読み込み -->
  	<?php echo $this->element('mobile_footer'); ?>

</div>