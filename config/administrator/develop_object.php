<?php
/**
 * Films model config
 */
return array(
	'title' => 'Объекты',
	'single' => 'Объекты',
	'model' => 'App\\DevelopObject',
	/**
	 * The display columns
	 */
	'columns' => array(
		'developer' => array(
			'type' => 'relationship',
			'relationship' => 'developer',
			'title' => 'Застройщик',
			'select' => '(:table).name'
		),
		'name' => array(
			'title' => 'Название'
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
		'name',
		'developer' => array(
			'type' => 'relationship',
			'title' => 'Застройщик',
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