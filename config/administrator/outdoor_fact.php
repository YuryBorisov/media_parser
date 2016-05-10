<?php
/**
 * Films model config
 */
return array(
	'title' => 'Наружная реклама',
	'single' => 'Наружная реклама',
	'model' => 'App\\OutdoorFact',
	/**
	 * The display columns
	 */
	'columns' => array(
		'outdoorContractor' => array(
			'type' => 'relationship',
			'relationship' => 'outdoorBannerFormat.outdoorContractor',
			'title' => 'Подрядчик',
			'select' => '(:table).name'
		),
		'outdoorBannerFormat' => array(
			'type' => 'relationship',
			'relationship' => 'outdoorBannerFormat',
			'title' => 'Формат банера',
			'select' => '(:table).name'
		),
		'developObject' => array(
			'type' => 'relationship',
			'relationship' => 'developObject',
			'title' => 'Объект',
			'select' => '(:table).name'
		),
		'address' => array(
			'title' => 'Адрес'
		)
	),
	/**
	 * The filter set
	 */
	'filters' => array(
		// 'page' => array(
		// 	'type' => 'relationship',
		// 	'relationship' => 'page',
		// 	'title' => 'Рекламный сайт',
		// 	'select' => '(:table).url',
		// 	'name_field' => 'url'
		// ),
		// 'bannerPlace' => array(
		// 	'type' => 'relationship',
		// 	'relationship' => 'bannerPlace',
		// 	'title' => 'Баннерное место',
		// 	'name_field' => 'full_name'
		// ),
	),
	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'outdoorBannerFormat' => array(
			'type' => 'relationship',
			'title' =>  'Тип размещения',
			'name_field' => 'full_name'

		),
		'developObject' => array(
			'type' => 'relationship',
			'title' => 'Объект',
			'name_field' => 'name'
		),
		'address' => array(
			'title' => 'Адрес'
		),
		'lat' => array(
			'title' => 'Широта'
		),
		'lng' => array(
			'title' => 'Долгота'
		)
	),

	'permission'=> function()
	{
		return Auth::check(); 
	},
);