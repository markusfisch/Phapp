Phapp
=====

A simple but scalable web application framework.

Hello World
-----------

Put that into index.php:

	<?php

	require_once 'Phapp.php';
	require_once 'Hello.php';

	$app = new Phapp();

	echo $app->run( 'Hello' );

Then place this into Hello.php:

	<?php

	class Hello extends PhappView
	{
		public function response()
		{
			return 'Hello World.';
		}
	}

Now upload those two files along with Phapp.php into your web root, fire up
your browser and request index.php.

See samples/ for more examples.

Principle
---------

Phapp is very minimal and very small. Just have a look at Phapp.php.

It works by defining a set of view objects that get processed by the main
application object.

Every view object should inherit from PhappView which provides two main
methods:

	public function request()
	{
		if( !$_REQUEST['order_number'] )
			return 'Home';

		return null;
	}

Handle the request in here and, if required, return the name of another view
that should take over.

The first view that returns null will get its response() method called to
respond to the request:

	public function response()
	{
		return "<h1>Hello</h1>";
	}

Put all output code into that method and return a string containing a html
snippet.

Subclass to extend
------------------

You may subclass Phapp and PhappView to equip them with methods for data
base access, translations and so on.

PDO support
-----------

If you're using PDOs, you may inherit from PhappPDOView and call query()
like this:

	if( ($result = $this->query(
		"SELECT
			first,
			last
			FROM members
			WHERE last_login = ?
			ORDER BY last",
		$lastLogin )) )
	{
		while( ($row = $result->fetch()) )
		{
			$contents .= "<li>{$row['first']} {$row['last']}</li>";
		}
	}
