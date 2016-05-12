<?php
/* @var $this LocationsController */
/* @var $model Locations */

$this->breadcrumbs=array(
	'Locations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Locations', 'url'=>array('index')),
	array('label'=>'Manage Locations', 'url'=>array('admin')),
);
?>

<h1>Create Locations</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<input type="button" id="map_preview" value="map preview">
<div id="alertmessage"></div>
<div style="width:100%;height:200px">
	<div id="map" style="height:100%"></div>
</div>

<script>
	var map;
	var address = "";

	function initMap(LatLong) {
		if (!LatLong){
			getLatLong(address);
		}else if(typeof(LatLong)=="string"){
			document.getElementById('alertmessage').innerHTML = LatLong;
		}else{
			document.getElementById('alertmessage').innerHTML = "";
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
	document.getElementById('map_preview').onclick = function(){
		address = document.getElementById('Locations_address').value;
		initMap();
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr6nrUdmD2gteig-2wSPo90EJj-iepnFo&callback=initMap" async defer></script>
