<?php
/**
 * Films model config
 */
return array(
	'title' => 'Контекстаная релама',
	'single' => 'Контекстаная релама',
	'model' => 'App\\Direct',
	/**
	 * The display columns
	 */
	'columns' => array(
		 'concurents', 'cpc', 'header', 'position', 'query', 'shows', 'text', 'traffic'
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

	    'add' => function ()
	    {
	    	return false;
	    }
	),
	
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