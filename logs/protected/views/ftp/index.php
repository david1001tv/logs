<?php
/* @var $this ProjectsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Projects' => array('/projects/index'),
	'Logs',
);
?>

<h1>Logs</h1>

<?php 
    $this->beginWidget('system.web.widgets.CWidget');

    foreach($files as $file){
        if($file !== '.' && $file !== '..') {
            echo '<p>'.$file.'</p>';
        }
    }

    $this->endWidget();
?>