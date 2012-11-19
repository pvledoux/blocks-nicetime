<?php
namespace Blocks;

/**
 * Nicetime by Pv Ledoux
 *
 * @package   Nicetime
 * @author    Pierre-Vincent Ledoux
 * @copyright Copyright (c) 2012, Pierre-Vincent Ledoux
 * @link      http://www.twitter.com/pvledoux
 */

/**
 * Custom extension
 */
class Nicetime_Twig_Extension extends \Twig_Extension
{
	/**
	 * Return filter(s) to add to environment
	 *
	 * @return Array
	 */
	public function getFilters()
	{
		$options = array(
			'is_safe' => array('all') // so that our returned content isn't automatically escaped
		);

		return array(
			'nicetime' => new \Twig_Filter_Method($this, 'nicetimeFilter', $options)
		);
	}

	// -------------------------

	/**
	 * Nicetime function
	 *
	 * @param  string $tagdata		Source
	 * @param  string $format		Output format
	 * @param  string $relative		Show relative time? (yes|no)
	 * @param  string $prefix		Prefix for relative time
	 * @param  array  $args 		other args
	 * @return string				Output
	 */
	public function nicetimeFilter($tagdata, $format = 'd-m-Y H:i', $relative = 'yes', $prefix = 'on ', $args = array())
	{
		$date = $tagdata;
		if (! $this->_is_timestamp($date))
			$date = strtotime($date);

		$diff = time() - $date;

		if ($relative !== 'no') {
			if ($diff >= 0 && $diff < 5)
				return "now";

			$frame = ($diff < 0) ? ' from now' : ' ago';
			$diff *= ($diff < 0) ? -1 : 1;

			if ($diff<60)
				return $diff . " second" . $this->_plural($diff) . $frame;

			$diff = round($diff/60);

			if ($diff<60)
				return $diff . " minute" . $this->_plural($diff) . $frame;

			$diff = round($diff/60);

			if ($diff<24)
				return $diff . " hour" . $this->_plural($diff) . $frame;

			$diff = round($diff/24);

			if ($diff<7)
				return $diff . " day" . $this->_plural($diff) . $frame;

			$diff = round($diff/7);

			if ($diff<4)
				return $diff . " week" . $this->_plural($diff) . $frame;

			return $prefix . date($this->_format, $date);
		}

		return date($this->_format, $date);
	}


	private function _plural($num) {
		if ($num != 1)
			return "s";
	}


	private function _is_timestamp( $string ) {
		return ( 1 === preg_match( '~^[1-9][0-9]*$~', $string ) );
	}

	// -------------------------

	/**
	 * Return name of Extension
	 *
	 * @return String
	 */
	public function getName()
	{
		return 'Nicetime_Twig_Extension';
	}

	// -------------------------
}
