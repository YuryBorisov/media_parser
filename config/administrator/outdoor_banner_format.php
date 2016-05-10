<?php
/**
 * Films model config
 */
return array(
	'title' => 'Форматы банеров',
	'single' => 'Формат банера',
	'model' => 'App\\OutdoorBannerFormat',
	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'outdoorContractor' => array(
			'type' => 'relationship',
			'relationship' => 'outdoorContractor',
			'title' => 'Подрядчик',
			'select' => '(:table).name'
		),
		'price' => array(
			'type' => 'number',
		    'title' => 'Стоимость размещения',
		    'symbol' => 'Р.',
		    'decimals' => 2,
		    'thousands_separator' => ' ',
		    'decimal_separator' => '.',
		),
		'name' => array(
			'title' =>  'Название'
		),
	),
	/**
	 * The filter set
	 */
	'filters' => array(
		'id',
		'name'
	),
	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'name',
		'outdoorContractor' => array(
			'type' => 'relationship',
			'title' => 'Подрядчик',
			'name_field' => 'name'
		),
		'price' => array(
			'type' => 'number',
		    'title' => 'Стоимость размещения',
		    'symbol' => '%',
		    'decimals' => 2,
		    'thousands_separator' => ' ',
		    'decimal_separator' => '.',
		)
	),

	'permission'=> function()
	{
		if (Auth::check()) {
			return Auth::user()->hasRole('reed_content');
		}  
	},
);