<!DOCTYPE html>
<html>
<body>

<h1 style=>FOODTRIP MAP</h1>

<a href="Homepage.php">BACK</a>
<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(15.8949, 120.2863),
  zoom: 10,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWor2r0C0o20jQC5qCfEUCcVJ9OAvmg6I&callback=myMap"></script>
<div id="googleMap" style="width:100%;height:100%"></div>
</body>
</html>
