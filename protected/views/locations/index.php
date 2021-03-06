<?php
/* @var $this LocationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Locations',
);
if (Yii::app()->user->isAdmin()){
	$this->menu=array(
		array('label'=>'Create Locations', 'url'=>array('create')),
		array('label'=>'Manage Locations', 'url'=>array('admin')),
	);
}
?>

<h1>Locations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
