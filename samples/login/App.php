<?php

/**
 * Login app sample
 */
class App extends Phapp
{
	/**
	 * Return page
	 *
	 * @return String html snippet
	 */
	public function contents()
	{
		if( !($view = $_REQUEST['view']) )
			$view = 'Home';

		return <<<EOF
<!doctype html>
<html>
<head>
<title>{$view}</title>
</head>
<body>
<article>
{$this->process( $view )}
</article>
</body>
</html>\n
EOF;
	}
}
