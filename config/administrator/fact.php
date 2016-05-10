<?php
/**
 * Films model config
 */
return array(
	'title' => 'Медийная реклама',
	'single' => 'Медийная реклама',
	'model' => 'App\\Fact',
	/**
	 * The display columns
	 */
	'columns' => array(
		'img_link' => array(
			'title' => 'Баннер',
			'output' => '<img src="(:value)" width="100" />',
		),
		'developer' => array(
			'type' => 'relationship',
			'relationship' => 'page.developObject.developer',
			'title' => 'Застройщик',
			'select' => '(:table).name'
		),
		'developObject' => array(
			'type' => 'relationship',
			'relationship' => 'page.developObject',
			'title' => 'Объект',
			'select' => '(:table).name'
		),
		'page' => array(
			'type' => 'relationship',
			'relationship' => 'page',
			'title' => 'Рекламный сайт',
			'select' => '(:table).url',
			'output' => '<a href="(:value)" target="_blank" height="100">(:value)</a>',
		),
		'mediaPlatform' => array(
			'type' => 'relationship',
			'relationship' => 'bannerPlace.mediaPlatformUrl.mediaPlatform',
			'title' => 'Площадка',
			'select' => '(:table).url',
			'output' => '<a href="(:value)" target="_blank" height="100">(:value)</a>',
		),
		'bannerPlace' => array(
			'type' => 'relationship',
			'relationship' => 'bannerPlace',
			'title' => 'Баннерное место',
			'select' => '(:table).title'
		),
		'created_at' => array(
			'title' => 'Зафиксированно',
		),
		'utm_source',
        'utm_medium',
        'utm_term',
        'utm_campaign',
	),
	/**
	 * The filter set
	 */
	'filters' => array(
		'page' => array(
			'type' => 'relationship',
			'relationship' => 'page',
			'title' => 'Рекламный сайт',
			'select' => '(:table).url',
			'name_field' => 'url'
		),
		'bannerPlace' => array(
			'type' => 'relationship',
			'relationship' => 'bannerPlace',
			'title' => 'Баннерное место',
			'name_field' => 'full_name'
		),
	),
	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'name'
	),

	'permission'=> function()
	{
		return Auth::check(); 
	},

	'action_permissions'=> array(
	    'delete' => function($model)
	    {
	        return false;
	    },
	    'update' => function ()
	    {
	    	return false;
	    },

	    'create' => function ()
	    {
	    	return false;
	    }
	),
);