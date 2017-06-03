<?php

$arr_verses = [
	[
		'chapter-number' => 'Proverbs 11:25',
		'chapter-text' => 'A generous man will prosper; he who refreshes others will himself be refreshed.'
	],
	[
		'chapter-number' => 'Isaiah 40:29',
		'chapter-text' => 'He gives power to the faint, and to him who has no might he increases strength.'
	],
	[
		'chapter-number' => 'Isaiah 40:31',
		'chapter-text' => 'but they who wait for the Lord shall renew their strength; they shall mount up with wings like eagles; they shall run and not be weary; they shall walk and not faint.'
	],
	[
		'chapter-number' => '2 Timothy 1:7',
		'chapter-text' => 'for God gave us a spirit not of fear but of power and love and self-control.'
	],
	[
		'chapter-number' => '2 Chronicles 15:7',
		'chapter-text' => 'But as for you, be strong and do not give up, for your work will be rewarded.'
	],
	[
		'chapter-number' => 'Romans 8:31',
		'chapter-text' => 'If God is for us, who can be against us?'
	],
];

//$verse = $arr_verses[ rand(0, count($arr_verses) - 1) ]; //one way to do this
$verse = $arr_verses[array_rand($arr_verses)];
$verse_chapter = $verse['chapter-number'];
$verse_text = $verse['chapter-text'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-*">
	<title>Random Verse</title>
</head>
<body>
	<blockquote>
		<h2>&ldquo;<?php echo $verse_text;  ?>&rdquo;</h2>
		<strong>- <?php echo $verse_chapter; ?> </strong>
	</blockquote>
</body>
</html>

