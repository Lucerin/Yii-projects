<?php
/* @var $this LbCustomerAddressController */
/* @var $model LbCustomerAddress */

$this->breadcrumbs=array(
	'Lb Customer Addresses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List LbCustomerAddress', 'url'=>array('index')),
	array('label'=>'Create LbCustomerAddress', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lb-customer-address-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Lb Customer Addresses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lb-customer-address-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'lb_customer_address_id',
		'lb_customer_id',
		'lb_customer_address_line_1',
		'lb_customer_address_line_2',
		'lb_customer_address_city',
		'lb_customer_address_state',
		/*
		'lb_customer_address_country',
		'lb_customer_address_postal_code',
		'lb_customer_address_website_url',
		'lb_customer_address_phone_1',
		'lb_customer_address_phone_2',
		'lb_customer_address_fax',
		'lb_customer_address_email',
		'lb_customer_address_note',
		'lb_customer_address_is_active',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
