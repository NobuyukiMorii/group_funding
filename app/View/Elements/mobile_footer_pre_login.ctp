<div data-role="footer" style="text-align:center" data-position="fixed" data-fullscreen="true">
	<a href="http://localhost:8888/group_funding/users/facebook" class="button" id="color-orange" data-icon="fb" data-iconpos="left" rel="external">Facebookではじめる</a>
    <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'login')) ;?>" class="button" id="color-orange" data-icon="mail" data-iconpos="left" rel="external">メルアドではじめる</a>
    <p class="agreement_upper">ログインをもって、以下の利用規約に同意したものと致します。</p>
    <!-- ボタンを非表示とする -->
    <div data-enhance="false">
    	<a href ="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'policy')) ;?>" class="text_decoration_none" rel="external"><p class="agreement_lower" >利用規約</p></a>
	</div>
</div>