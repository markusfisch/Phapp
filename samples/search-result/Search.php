<?php

/**
 * Search form
 */
class Search extends PhappView
{
	/**
	 * Show search form
	 *
	 * @return String html snippet
	 */
	public function response()
	{
		return <<<EOF
<form action="?" method="post">
<input type="hidden" name="view" value="Result"/>
<label>Search for what?</label>
<input type="text" name="what"/>
<input type="submit" name="search" value="Go"/>
</form>
EOF;
	}
}
