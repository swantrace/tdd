<?php
/**
 * tdd
 * @package Tdd
 * @version 0.1.0
 * @link https://github.com/swantrace/tdd
 * @author swantrace <https://github.com/swantrace>
 * @license https://github.com/swantrace/tdd/blob/master/LICENSE
 * @copyright Copyright (c) 2014, swantrace 
 */

namespace swantrace\Tdd;

require(dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/autoload.php');

/**
 * The Tdd class
 * @author swantrace <https://github.com/swantrace>
 * @since 0.1.0
 */
class Tdd {

	/**
	 * A sample parameter
	 * @var int $myParam This is my parameter
	 * @since 0.1.0
	 */
	public $myParam = 0;

	/**
	 * A sample function that adds the $n param to $myParam
	 * @name increase
	 * @param int $n The number to add to $myParam
	 * @since 0.1.0
	 * @return object the Tdd object
	 */
	public function increase ( $n ) {
		$this->myParam += $n;
		return $this;
	}

	/**
	 * A sample function that sets $myParam to 0
	 * @name negate
	 * @since 0.1.0
	 * @return object the Tdd object
	 */
	public function negate (){
		$this->myParam = 0;
		return $this;
	}
}
