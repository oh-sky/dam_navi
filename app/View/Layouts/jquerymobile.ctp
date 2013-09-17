<!DOCTYPE html>
<html lang="ja">
<head>
	<title>ダムNavi(仮)</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="ダム,dam,ダムNavi,ダムナビ,アーチ式,重力式,ロックフィル">
	<meta name="description" content="ダムNaviは今、自分の近くにあるダムを検索できる、スマートフォン向けWebサイトです。この世に無駄なダムなど存在しない。">
	<?php echo $this->Html->css('jquery.mobile-1.3.2.min.css'); ?>
	<?php echo $this->Html->script('jquery-1.10.1.min.js'); ?>
	<?php echo $this->Html->script('jquery.mobile-1.3.2.min.js'); ?>
</head>

<body>
	<h1><a href="http://damnavi.oh-sky.net">ダムNavi(仮)</a></h1>
	<?php echo $this->fetch('content'); ?>
</body>
</html>