<?php

/**
 * Private content
 */
class Secret extends Auth
{
	/**
	 * Handle request
	 *
	 * @return String name of view to take over
	 */
	public function request()
	{
		// do this for each and every view you want to be private
		return parent::request();
	}

	/**
	 * Show private content
	 *
	 * @return String html snippet
	 */
	public function response()
	{
		return <<<EOF
<h1>Secret content</h1>
<p>Now go back to <a href="?view=Home">Home</a> and come back again.</p>\n
EOF;
	}
}
