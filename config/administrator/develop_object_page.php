<?php
/**
 * Films model config
 */
return array(
	'title' => 'Рекламные сайты',
	'single' => 'Рекламный сайт',
	'model' => 'App\\DevelopObjectPage',
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
		'url' => array(
			'title' => 'Адрес'
		)

	),
	/**
	 * The filter set
	 */
	'filters' => array(
		'url',
		'developObject' => array(
			'type' => 'relationship',
		)
	),
	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'url' => array(
			'title' => 'Адрес'
		),
		'developObjectPage' => array(
			'type' => 'relationship',
			'title' => 'Родительская страница',
			'name_field' => 'url'
		),
		'developObject'	=> array(
			'type' => 'relationship',
			'title' => 'Объект',
			'name_field' => 'name'
		),
		'contextAnalytic' => array(
			'type' => 'bool',
			'title' => 'Парсить контекст'
		),
		'organic' => array(
			'type' => 'bool',
			'title' => 'Парсить СЕО'
		)
	),

	'permission'=> function()
	{
		if (Auth::check()) {
			return Auth::user()->hasRole('reed_content');
		}  
	},

);