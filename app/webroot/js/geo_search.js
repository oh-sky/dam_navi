$(function() {
	$('#buttonGeoSearch').click(function() {
		if (typeof(navigator.geolocation) != 'undefined') {
			navigator.geolocation.getCurrentPosition(
				sendDamOrderByDistanceFromForm,
				function() {
					alert('位置情報を取得できませんでした');
				}
			);
		} else {
			alert('GPSデバイスを取得できませんでした。');
		}
	});
});
function sendDamOrderByDistanceFromForm(position) {
	$('#DamLongitude').val(position.coords.longitude);
	$('#DamLatitude').val(position.coords.latitude);
	$('#DamOrderByDistanceFromForm').submit();
}
