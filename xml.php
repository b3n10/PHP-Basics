<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>XML Sample</title>
	</head>
	<body>
		<ul>
			<?php
				$dom = simplexml_load_file("sample.xml");
				foreach ($dom->xpath("/people/men") as $men) {
					print "<li>";
					print "Age of man: ";
					print $men->age;
					print "</li>";
				}
			?>
		</ul>
	</body>
</html>

