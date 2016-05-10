<?php
/**
 * Films model config
 */
return array(
	'title' => 'Страницы',
	'single' => 'Страницы',
	'model' => 'App\\MediaPlatformUrl',
	/**
	 * The display columns
	 */
	'columns' => array(
		'mediaPlatform' => array(
			'type' => 'relationship',
			'relationship' => 'mediaPlatform',
			'title' => 'Площадка',
			'name_field' => 'path',
			'select' => '(:table).url'
		),
		'path' => array(
			'title' => 'Страница'
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
		'path',
		'mediaPlatform' => array(
			'type' => 'relationship',
			'title' => 'МедиаПлощадка',
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