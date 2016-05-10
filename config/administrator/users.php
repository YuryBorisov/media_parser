<?php
/**
 * Films model config
 */
return array(
	'title' => 'Пользователи',
	'single' => 'Пользователь',
	'model' => 'App\\User',
	/**
	 * The display columns
	 */
	'columns' => array(
		'email',
		'name',
		'created_at'

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
		'email',
		'name',
		'password' => array(
		    'type' => 'password',
		    'title' => 'Пароль',
		),
		'roles' => array(
		    'type' => 'relationship',
		    'title' => 'Роли',
		    'name_field' => 'name', //using the getFullNameAttribute accessor
		)
	),

	'permission'=> function()
	{
		if (Auth::check()) {
			return Auth::user()->hasRole('edit_customer');
		}  
	},
);