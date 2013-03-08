<?php

/**
 * Login form
 */
class Login extends PhappView
{
	/**
	 * Try to login
	 *
	 * @return String name of view to take over
	 */
	public function request()
	{
		if( $_REQUEST['passphrase'] == 'sesame open' )
		{
			$_SESSION['authenticated'] = true;
			return $_REQUEST['for'];
		}

		return null;
	}

	/**
	 * Show public content
	 *
	 * @return String html snippet
	 */
	public function response()
	{
		if( !($view = $_REQUEST['view']) )
			$view = 'Secret';

		return <<<EOF
<form action="?" method="post">
<input type="hidden" name="view" value="Login"/>
<input type="hidden" name="for" value="{$view}"/>
<label>Passphrase</label>
<input type="text" name="passphrase"/>
<input type="submit" name="login" value="Login"/>
</form>
EOF;
	}
}
