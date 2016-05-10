<?php
/**
 * Films model config
 */
return array(
	'title' => 'Медиа-скидки',
	'single' => 'Медиа-скидку',
	'model' => 'App\\Discount',
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
		'mediaPlatform' => array(
			'type' => 'relationship',
			'relationship' => 'mediaPlatform',
			'title' => 'Площадка',
			'name_field' => 'path',
			'select' => '(:table).url'
		),
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
		'mediaPlatform' => array(
			'type' => 'relationship',
			'title' => 'МедиаПлощадка',
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
		'mediaPlatform' => array(
			'type' => 'relationship',
			'title' => 'МедиаПлощадка',
			'name_field' => 'name'
		),
		'value' => array(
			'type' => 'number',
		    'title' => 'Скидка',
		    'symbol' => '%',
		    'decimals' => 2,
		    'thousands_separator' => ' ',
		    'decimal_separator' => '.',
		)
	),

	'permission'=> function()
	{
		return Auth::check();
	}
);