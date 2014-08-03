<div class="content-primary main-content">
	<div class="pager">
		<?php echo $this->Paginator->numbers (array (
		'before' => $this->Paginator->hasPrev() ? $this->Paginator->first('<<').' | ' : '',
		'after' => $this->Paginator->hasNext() ? ' | '.$this->Paginator->last('>>') : '',
    		)
		);
		?>
	</div>
	<ul data-role="listview">
		<?php foreach ($data as $key => $value){ ?>
		<li><a href="<?=$this->Html->url('/Campaigns/detail/'.$data[$key]['Campaign']['id'])?>" rel="external"> 
				<img src="<?=$this->Html->url('/Campaigns/image/'.$data[$key]['Campaign']['id'])?>" /> 
				<h3><?php echo h($data[$key]['Campaign']['name']) ;?></h3>
				<p>目標<?php echo h(number_format($data[$key]['Campaign']['small_sum'])) ;?>円/期限<?php echo h(date('Y年m月d日', strtotime($data[$key]['Campaign']['time_limit'])));?></p> 
				<p><?php echo h($data[$key]['Campaign']['description']) ;?></p> 
			</a>
		</li> 
		<?php } ?>
	</ul> 
</div>