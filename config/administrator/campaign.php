<?php
/**
 * Films model config
 */
return array(
	'title' => 'Кампании',
	'single' => 'Кампанию',
	'model' => 'App\\Campaign',
	/**
	 * The display columns
	 */
	'columns' => array(
		'agency' => array(
			'type' => 'relationship',
			'relationship' => 'agency',
			'title' => 'Агенство',
			'select' => '(:table).name'
		),
		'page' => array(
			'type' => 'relationship',
			'relationship' => 'page',
			'title' => 'Сайт',
			'select' => '(:table).url'
		),
		'campaignType' => array(
			'type' => 'relationship',
			'relationship' => 'campaignType',
			'title' => 'Тип кампании',
			'select' => '(:table).name'
		)
	),
	/**
	 * The filter set
	 */
	'filters' => array(
		'agency' => array(
			'type' => 'relationship',
			'title' => 'Агенство',
			'name_field' => 'name'
		),
		'page' => array(
			'type' => 'relationship',
			'title' => 'Сайт',
			'name_field' => 'url'
		),
		'campaignType' => array(
			'type' => 'relationship',
			'title' => 'Тип кампании',
			'name_field' => 'name'
		)
	),


	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'agency' => array(
			'type' => 'relationship',
			'title' => 'Агенство',
			'name_field' => 'name'
		),
		'page' => array(
			'type' => 'relationship',
			'title' => 'Сайт',
			'name_field' => 'url'
		),
		'campaignType' => array(
			'type' => 'relationship',
			'title' => 'Тип кампании',
			'name_field' => 'name'
		)
	),

	'permission'=> function()
	{
		if (Auth::check()) {
			return Auth::user()->hasRole('reed_content');
		}  
	},

);