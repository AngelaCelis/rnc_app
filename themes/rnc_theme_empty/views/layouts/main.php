<!DOCTYPE html>
<html>
<head>
	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Yii::app()->charset ?>" />
	<meta name="language" content="es" />
	<meta name="keywords" content="Sistema de registro nacional de colecciones biologicas"/>
	<meta name="description" content="Sistema de registro nacional de colecciones biologicas."/>
	<meta name="author" content="Instituto Alexander Von Humboldt" />
	<meta name="copyright" content="Copyright 2012-2022 por el Instituto Alexander Von Humboldt" />
	<meta name="company" content="Instituto Alexander Von Humboldt" />
	<link rel="shortcut icon" href="<?= Yii::app()->theme->baseUrl; ?>/css/images/favicon.ico" />
	<link rel="apple-touch-icon" href="http://www.sibcolombia.net/catalogo/admin/apple.png" />
	
	<!--[if lt IE 8]>
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.jscrollpane.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-timepicker.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-wysihtml5-0.0.2.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/speciesGlobal.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/panes.css" />
	
	<!-- Stylesheet for jquery-fineuploader library -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery-fineuploader/fineuploader-3.6.3.css" />

	<?php
		Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/core.js', CClientScript::POS_HEAD);
		// the mousewheel plugin
		Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.mousewheel.js', CClientScript::POS_HEAD);
		// the jScrollPane script
		Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.jscrollpane.min.js', CClientScript::POS_HEAD);
		Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/bootstrap-timepicker.min.js', CClientScript::POS_HEAD);
		Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/fancybox/jquery.fancybox.pack.js', CClientScript::POS_HEAD);
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/wysihtml5-0.3.0_rc2.min.js', CClientScript::POS_HEAD);
		Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/bootstrap-wysihtml5-0.0.2.min.js', CClientScript::POS_HEAD);
	?>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
</head>

<body>
		 	
	<header class="sib">
		<div class="ribbon-wrapper-green"><div class="ribbon-green">BETA</div></div>
		<a class="logo" href= "http://www.humboldt.org.co" title="Portal de datos SiB Colombia"><img  src="<?=Yii::app()->theme->baseUrl?>/images/logoHumboldt.png"></a>
	</header> <!-- Fin header -->
	
	<div id="cocoon" >
		<div id="container">
			<div id="content">
				<div id="panes">
				<div>
					<?=$content;?>
				</div>
				</div>
			</div>
		</div>
		
		<footer>
			<section>
			  <div>
				<p>
					Sede Principal: Calle28A#15-09 Bogotá, D.C., Colombia | PBX: (57)(1) 3202767 | NIT 820000142-2 | Horario de atención 8:30 a.m. - 5:30 p.m.<br>
					Prohibida su reproducción total o parcial, asi como su traducción a otro idioma - Todos los derechos reservados 2013.
				</p>
			</div>
			</section>
		</footer>
	</div>
</body>
</html>