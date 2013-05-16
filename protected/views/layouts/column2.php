<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>


<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>

<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'CP基本信息',
		));
		$this->widget('zii.widgets.CMenu', array(
 			'items'=>array(
 					array('label'=>'列表所有CP信息', 'url'=>array('CpBaseInfo/index')),
 					array('label'=>'新建CP信息', 'url'=>array('CpBaseInfo/create')),
 					array('label'=>'管理CP信息', 'url'=>array('CpBaseInfo/admin')),
 					),
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
		
		$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Cp联系人',
		));
		$this->widget('zii.widgets.CMenu', array(
				'items'=>array(
		array('label'=>'列表所有联系人', 'url'=>array('CpContactInfo/index')),
		array('label'=>'新建联系人', 'url'=>array('CpContactInfo/create')),
		array('label'=>'管理联系人', 'url'=>array('CpContactInfo/admin')),
                ),
				'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
		
		$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'游戏列表',
		));
		$this->widget('zii.widgets.CMenu', array(
				'items'=>array(
						array('label'=>'所有游戏列表', 'url'=>array('CpGameInfo/index')),
						array('label'=>'新建游戏', 'url'=>array('CpGameInfo/create')),
						array('label'=>'管理游戏', 'url'=>array('CpGameInfo/admin')),
				),
				'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	
		
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>