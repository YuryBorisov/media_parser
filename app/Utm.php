<?php

namespace App;


class Utm {

	public static function getUtm($utm)
	{
		$utmString = explode("?", $utm);
		$utmString =  isset($utmString[1]) ? $utmString[1] : '';

		$utms = explode("&", $utmString);

		var_dump($utms);
		$result = new \stdClass;

		$result->utm_source = '';
        $result->utm_medium = '';
        $result->utm_term = '';
        $result->utm_campaign = '';

		foreach ($utms as $utm) {
			var_dump($utm);
			$values = explode("=", $utm);
			if (count($values) > 1) $result->{$values[0]} = $values[1];
		}

		return $result;
	}
}