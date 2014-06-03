<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'type'=>'striped bordered condensed',
	'id'=>'catalogoespecies-grid',
	//'fixedHeader' => true,
	'dataProvider'=>$model->search(),
	//'responsiveTable' => true,
	'filter'=>$model,
	'ajaxUrl'=>'index',
	'columns'=>array(
		'catalogoespecies_id',
		array( 'name'=>'taxonnombre_search', 'htmlOptions'=>array('width'=>'280'), 'value'=>'$data->pcaatCe!==null?$data->pcaatCe->taxonnombre:"None"', 'type'=>'raw'),
		//'citacion_id',
		//'contacto_id',
		//'fechaactualizacion',
		'fechaelaboracion',
		//'titulometadato',
		array( 'name'=>'taxonnombrecompleto_search', 'htmlOptions'=>array('width'=>'280'), 'value'=>'$data->pcaatCe!==null?$data->pcaatCe->taxoncompleto:"None"'),
		array( 'name'=>'nombresComunes_search', 'htmlOptions'=>array('width'=>'280'), 'value'=>'$data->listaNombresComunes!==null?$data->listaNombresComunes:"None"', 'type'=>'raw'),
		array( 'name'=>'verificacionce.estado_id', 'header' => 'Estado', 'value'=>'$data->verificacionce!==null?$data->verificacionce->estado->nombre:"None"'),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); ?>