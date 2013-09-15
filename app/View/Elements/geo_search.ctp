<?php
echo $this->Form->create(
	'Dam',
	array(
		'action' => 'order_by_distance_from',
	));
echo $this->Form->hidden('longitude');
echo $this->Form->hidden('latitude');
echo $this->Form->end();
?>
<button id="buttonGeoSearch">現在の位置情報から近くのダムを検索</button>
