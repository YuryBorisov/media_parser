<?php
/**
 * Films model config
 */
return array(
	'title' => 'Реклама по ТВ',
	'single' => 'Реклама по ТВ',
	'model' => 'App\\TvFact',
	/**
	 * The display columns
	 */
	'columns' => array(
		'developer' => array(
			'type' => 'relationship',
			'relationship' => 'developObject.developer',
			'title' => 'Застройщик',
			'select' => '(:table).name'
		),
		'developObject' => array(
			'type' => 'relationship',
			'relationship' => 'developObject',
			'title' => 'Объект',
			'select' => '(:table).name'
		),
		'channel' => array(
			'title' => 'Канал'
		),
		'price' => array(
			'title' => ''
		)

	),
	/**
	 * The filter set
	 */
	'filters' => array(
	),
	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'developObject'	=> array(
			'type' => 'relationship',
			'title' => 'Объект',
			'name_field' => 'name'
		),
		'channel' => array(
			'title' => 'Канал'
		),
		'price' => array(
			'type' => 'number',
		    'title' => 'Стоимость размещения',
		    'symbol' => 'Р.',
		    'decimals' => 2,
		    'thousands_separator' => ' ',
		    'decimal_separator' => '.',
		),
	),

	'permission'=> function()
	{
		if (Auth::check()) {
			return Auth::user()->hasRole('edit_customer');
		}  
	},
);