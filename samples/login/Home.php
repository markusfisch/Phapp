<?php

/**
 * Public content
 */
class Home extends PhappView
{
	/**
	 * Show public content
	 *
	 * @return String html snippet
	 */
	public function response()
	{
		return <<<EOF
<p><a href="?view=Secret">Secret</a></p>\n
EOF;
	}
}
