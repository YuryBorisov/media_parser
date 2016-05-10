<?php
/**
 * Films model config
 */
return array(
	'title' => 'Застройщики',
	'single' => 'Застройщик',
	'model' => 'App\\Developer',
	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'name'
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
		'name'
	),

	'permission'=> function()
	{
		if (Auth::check()) {
			return Auth::user()->hasRole('reed_content');
		}  
	},

);