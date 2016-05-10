<?php
/**
 * Films model config
 */
return array(
	'title' => 'Апартаменты',
	'single' => 'Апартаменты',
	'model' => 'App\\Apartment',
	/**
	 * The display columns
	 */
	'columns' => array(
		'name' => array(
			'title' => 'Номер'
		),
		'rc' => array(
			'title' => 'Комнатность'
		),
		'tc' => array(
			'title' => 'Стоимость'
		),
		'sq' => array(
			'title' => 'Площадь'
		),
		'cpm' => array(
			'title' => 'Стоимость квадратного метра'
		),
		'st' => array(
			'title' => 'Статус'
		)
	),
	/**
	 * The filter set
	 */
	'filters' => array(
		'page' => array(
			'type' => 'relationship',
			'relationship' => 'page',
			'title' => 'Сайт',
			'name_field' => 'url'
		)
	),
	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'email'
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