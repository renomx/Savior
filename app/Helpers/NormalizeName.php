<?php

namespace app\Helpers;
use App\Helpers\Contracts\NormalizeNameContract;

class NormalizeName implements NormalizeNameContract
{
	/**
     * Method for normalize strings for any purpose
     *
     * @param string $str
     * @param array $replace
     * @param string $delimiter
     *
     * @return string
     */
	public function normalize($str, $replace=array(),$delimiter='-')
	{
		if( !empty($replace) ) {
			$str = str_replace((array)$replace, ' ', $str);
		}

		$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		$clean = strtolower(trim($clean, '-'));
		$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

		return $clean;
	}

	/**
     * Demo method for creating service providers.
     *
     * @return string
     */
    public function blastOff()
    {
        return 'Houston, we have ignition';
    }
}