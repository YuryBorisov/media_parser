<?php
/**
 * Films model config
 */
return array(
	'title' => 'Медиаплощадки',
	'single' => 'Медиаплощадка',
	'model' => 'App\\MediaPlatform',
	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'name',
		'url'
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
		"url"
	),

	'permission'=> function()
	{
		if (Auth::check()) {
			return Auth::user()->hasRole('reed_content');
		}  
	},
);