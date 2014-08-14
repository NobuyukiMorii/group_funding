<div data-id="common_footer" data-role="footer" data-position="fixed" data-fullscreen="true" data-position="inline">
    <div data-role="navbar">
        <ul>
			<li><a href="<?php echo $this->Html->url("home") ?>" data-icon="bullets" rel="external"></a></li> 
			<li><a href="<?php echo $this->Html->url('create') ;?>" data-icon="edit" rel="external"></a></li> 
			<li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'profile')) ;?>" data-icon="user" rel="external"></a></li> 
        </ul>
    </div>
</div>