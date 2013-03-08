<?php

/**
 * Search/Result sample app
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
{$this->nav( $view )}
<article>
{$this->process( $view )}
</article>
</body>
</html>\n
EOF;
	}

	/**
	 * Generate navigation
	 *
	 * @param $view - name of view
	 * @return String html snippet
	 */
	private function nav( $view = null )
	{
		$c = '<nav><ul>';

		foreach( array(
			'Home',
			'Search' ) as $v )
			$c .=
				"<li" .
				($v == $view ? ' class="Selected"' : null) .
				"><a href=\"?view=$v\">$v</a></li>";

		$c .= '</ul></nav>';

		return $c;
	}
}
