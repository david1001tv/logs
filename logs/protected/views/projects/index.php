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
));

    if((isset($_GET['success'])) && ($_GET['success'] == true)) {
        echo '<h1>dumped!</h1>';
    } else {
        echo '<h1>'.$_GEt['errors'].'</h1>';
    }

    try {
        // Listing files
        /*Yii::app()->sftp->connect();
        $cur_dir = Yii::app()->sftp->getCurrentDir() . '/';
        $files = Yii::app()->sftp->listFiles($cur_dir);*/
        $ftp = Yii::app()->ftp;
        ftp_pasv($ftp->getConnect(), true);
        $files = $ftp->listFiles($ftp->currentDir());
        foreach ($files as $file) {
            echo '<p>'.$file.'</p>';
        }
    } catch(Exception $e) {
        echo $e->getMessage();
    }
?>