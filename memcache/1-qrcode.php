<?php
	
	//引入自动加载文件
	include './vendor/autoload.php';

	use Endroid\QrCode\QrCode;

	$qrCode = new QrCode('http://www.baidu.com');

	header('Content-Type: '.$qrCode->getContentType());
	echo $qrCode->writeString();
