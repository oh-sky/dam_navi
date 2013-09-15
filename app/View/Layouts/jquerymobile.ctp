<!DOCTYPE html>
<html lang="ja">
<head>
	<title>ダムナビ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php echo $this->Html->css('jquery.mobile-1.3.2.min.css'); ?>
	<?php echo $this->Html->script('jquery-1.10.1.min.js'); ?>
	<?php echo $this->Html->script('jquery.mobile-1.3.2.min.js'); ?>
</head>

<body>
	<h1>ダムNavi</h1>
	<?php echo $this->fetch('content'); ?>
</body>
</html>