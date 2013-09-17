<?php echo $this->Html->script('geo_search'); ?>
<?php echo $this->element('geo_search'); ?>
<div>
<p>出かけた先で「ここに<ruby>Roman<rt>ダム</rt></ruby>はあるのだろうか」って思うこと、ありますよね。</p>
<p>そんな時に現在の自分の位置情報から近くのダムを探すことができる、それが「ダムNavi」！！！</p>
<p>現在、登録ダム数は<?php echo count($damData); ?>件。正式リリースに向けて、随時追加作業を行って参ります。</p>
</div>
<div>
<h4>バグ情報</h4>
<p>下記のバグを認識しております。随時修正を行って参ります。</p>
<ul>
<li>「水系」が誤って登録されているダムがある</li>
</ul>
</div>
