<?php echo $this->Html->script('geo_search'); ?>
<?php echo $this->element('geo_search'); ?>
<p>経度:<?php echo $longitude; ?>、 緯度:<?php echo $latitude; ?>から、距離の短いダム</p>
<table data-role="table" id="tableDamData" data-mode="columntoggle" class="ui-body-d ui-shadow ui-responsive table-stripe">
  <thead>
  <tr class="ui-bar-d">
    <th data-priority="2">水系</th>
    <th data-priority="1">河川</th>
    <th>ダム名称</th>
    <th>地図</th>
    <th>距離</th>
  </tr>
  </thead>
  <tbody>
<?php
foreach ($damData as $damDatum){
?>
  <tr>
    <td><?php echo $damDatum['BasinSystem']['name']?></td>
    <td><?php echo $damDatum['River']['name']?></td>
    <td><a href="http://ja.wikipedia.org<?php echo $damDatum['Dam']['wikipedia_url']?>" target="_blank"><?php echo $damDatum['Dam']['name']?></a></td>
    <td><a href="//maps.google.com/maps?q=<?php echo $damDatum['Dam']['latitude']?>,<?php echo $damDatum['Dam']['longitude']?>" target="_blank">地図</a></td>
    <td><?php echo sprintf('%.2f', $damDatum[0]['Dam__distance'])?>km</td>
  </tr>
<?php
}
?>
  </tbody>
</table>
