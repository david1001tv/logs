<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome </h1>
<?php
	/*$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$projects,
		'itemView'=>'_post'
	));*/
	echo '<div id="proj">';
	foreach($projects as $project){
		echo '<p>'.$project['name'].'</p>';
	}
	echo '</div>';
?>