<?php
/* @var $this ProjectsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Projects',
);

$this->menu=array(
	array('label'=>'Create Projects', 'url'=>array('create')),
	array('label'=>'Manage Projects', 'url'=>array('admin')),
);
?>

<h1>Projects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


<?php

Yii::import('ext.SDatabaseDumper');
  $dumper = new SDatabaseDumper;
  // Get path to backup file
  $file = Yii::getPathOfAlias('@backups').DIRECTORY_SEPARATOR.'dump_'.date('Y-m-d_H_i_s').'.sql';

  // Gzip dump
  if(function_exists('gzencode'))
      file_put_contents($file.'.gz', gzencode($dumper->getDump()));
  else
      file_put_contents($file, $dumper->getDump());
?>