<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-box.css" />

    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/main.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'Funcion', 'url'=>array('/funcion/index'), 'visible'=>Yii::app()->user->name=='admin'),
                array('label'=>'Categoria Funcion', 'url'=>array('/categoria/index'), 'visible'=>Yii::app()->user->name=='admin'),
                array('label'=>'Compras', 'url'=>array('/entrada/index'), 'visible'=>Yii::app()->user->name!='admin' && !Yii::app()->user->isGuest),
                array('label'=>'Clasificacion Funcion', 'url'=>array('/clasificacion/index'), 'visible'=>Yii::app()->user->name=='admin'),
                array('label'=>'Sala', 'url'=>array('/sala/index'), 'visible'=>Yii::app()->user->name=='admin'),
                array('label'=>'Sala Funcion', 'url'=>array('/salaFuncion/index'), 'visible'=>Yii::app()->user->name=='admin'),
                array('label'=>'Tipo Sala', 'url'=>array('/tipo/index'), 'visible'=>Yii::app()->user->name=='admin'),                       
                array('label'=>'Usuarios','url'=>array('/user'), 'visible'=>Yii::app()->user->name=='admin'),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer" style="text-align:center;" class="span10">
		Copyright &copy; <?php echo date('Y'); ?> by PUCESE.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
