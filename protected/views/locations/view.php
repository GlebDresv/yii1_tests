<?php
/* @var $this LocationsController */
/* @var $model Locations */

$this->breadcrumbs=array(
	'Locations'=>array('index'),
	$model->id,
);
if (Yii::app()->user->isAdmin()){
	$this->menu=array(
		array('label'=>'List Locations', 'url'=>array('index')),
		array('label'=>'Create Locations', 'url'=>array('create')),
		array('label'=>'Update Locations', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Delete Locations', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Manage Locations', 'url'=>array('admin')),
	);
}
?>

<h1>View Locations #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'address',
	),
)); 

?>



<div style="width:100%;height:200px">
	<div id="map" style="height:100%"></div>
</div>

<script>
	var map;
	var address = "<?php echo $model->address ?>";

	function initMap(LatLong) {
	if (!LatLong){
		getLatLong(address);
	}else{
		map = new google.maps.Map(document.getElementById('map'), {
			center: LatLong,
			zoom: 8,
		});
	}
	}


	function getLatLong(address) {
	var geocoder = new google.maps.Geocoder();
	var result = [];
	return geocoder.geocode( { 'address': address, 'region': 'uk' }, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			result["lat"] = results[0].geometry.location.lat();
			result["lng"] = results[0].geometry.location.lng();
		} else {
			result = "Unable to find address: " + status;
		}
		return initMap(result);
		});
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr6nrUdmD2gteig-2wSPo90EJj-iepnFo&callback=initMap" async defer></script>