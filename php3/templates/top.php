<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
<link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/style.css">	
</head>
<body>
<div class="header">
	<h1><?php checkIfIsSet($page_title); if (!isset($page_title))  ?></h1>
	<h2><?php checkIfIsSet($page_header); if (!isset($page_header)) ?></h1>
</div>
<div class="container">