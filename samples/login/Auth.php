<?php

/**
 * Authenticate
 */
class Auth extends PhappView
{
	/**
	 * Check if this request is authenticated
	 *
	 * @return String name of view to take over
	 */
	public function request()
	{
		if( !$_SESSION['authenticated'] )
			return 'Login';

		return null;
	}
}
