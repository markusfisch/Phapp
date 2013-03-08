<?php

/**
 * Result
 */
class Result extends PhappView
{
	private $what;

	/**
	 * Handle request
	 *
	 * @return String name of view to take over
	 */
	public function request()
	{
		if( !($this->what = $_REQUEST['what']) )
			return 'Home';

		return null;
	}

	/**
	 * Show result
	 *
	 * @return String html snippet
	 */
	public function response()
	{
		return "You searched for $this->what";
	}
}
