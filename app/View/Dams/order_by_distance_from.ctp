<?php echo $this->Html->script('geo_search'); ?>
<?php echo $this->element('geo_search'); ?>
<p>経度:<?php echo $longitude; ?>、 緯度:<?php echo $latitude; ?>から、距離の短いダム</p>
<table>
  <tr>
    <th>水系</th><th>河川</th><th>ダム名</th><th>距離</th>
  </tr>
<?php
foreach ($damData as $damDatum){
?>
  <tr>
    <td><?php echo $damDatum['BasinSystem']['name']?></td>
    <td><?php echo $damDatum['River']['name']?></td>
    <td><a href="http://ja.wikipedia.org<?php echo $damDatum['Dam']['wikipedia_url']?>" target="_blank"><?php echo $damDatum['Dam']['name']?></a></td>
    <td><?php echo sprintf('%.2f', $damDatum[0]['Dam__distance'])?>km</td>
  </tr>
<?php
}
?>
</table>
