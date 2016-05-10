<?php
/**
 * Films model config
 */
return array(
	'title' => 'Баннерные места',
	'single' => 'Баннерное место',
	'model' => 'App\\BannerPlace',
	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'title' => array(
			'title' => 'Название'
		),
		'mediaPlatform' => array(
			'type' => 'relationship',
			'relationship' => 'mediaPlatformUrl.mediaPlatform',
			'title' => 'Площадка',
			'name_field' => 'path',
			'select' => '(:table).url'
		),
		'mediaPlatformUrl' => array(
			'type' => 'relationship',
			'relationship' => 'mediaPlatformUrl',
			'title' => 'Страница',
			'select' => '(:table).path'
		),
		'price' => array(
			'type' => 'number',
		    'title' => 'Стоимость размещения',
		    'symbol' => 'Р.',
		    'decimals' => 2,
		    'thousands_separator' => ' ',
		    'decimal_separator' => '.',
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
		'title' => array(
			'title' => 'Название'
		),
		'selector' =>  array(
			'title' => 'CSS-селектор'
		),
		'img_selector' =>  array(
			'title' => 'IMG-селектор'
		),
		'object_selector' =>  array(
			'title' => 'OBJECT-селектор'
		),
		'price' => array(
			'type' => 'number',
		    'title' => 'Стоимость размещения',
		    'symbol' => 'Р.',
		    'decimals' => 2,
		    'thousands_separator' => ' ',
		    'decimal_separator' => '.',
		),
		'mediaPlatformUrl' => array(
			'type' => 'relationship',
			'title' => 'Страница',
			'name_field' => 'full_name'
		)	
	),

	'permission'=> function()
	{
		if (Auth::check()) {
			return Auth::user()->hasRole('reed_content');
		}  
	},



);