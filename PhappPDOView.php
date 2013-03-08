<?php

/**
 * Phapp view with data base access
 */
class PhappPDOView extends PhappView
{
	/**
	 * Query database
	 *
	 * @param $q - SQL query
	 * @param ... - arguments
	 */
	protected function query( $q )
	{
		if( !$this->app->db &&
			!($this->app->db = new PDO(
				DB_HOST,
				DB_USER,
				DB_PASS )) )
			return null;

		$a = func_get_args();
		array_shift( $a );

		$s = $this->app->db->prepare( $q );

		return $s->execute( $a ) ? $s : null;
	}
}
