<?php

//foreach (arrays as array) {
////	body to loop
////}

$br = '<br/>';

$topics = [
	[
		'id'		=> 1,
		'title'		=> 'How to type on a computer?',
		'post' 		=> [
			['body' => 'Type on using physical keyboard.'],
			['body' => 'Type using on-screen keyboard.']
		]
	],

	[
		'id'		=> 2,
		'title'		=> 'Most talked about topic on DRT!',
		'post' 		=> [
			['body' => 'Number of productivity.'],
			['body' => 'Agents on SIL.']
		]
	]	

];

foreach ($topics as $topic) {
	echo '<h1>' . $topic['title'] . '</h1>';
	echo '<ul>';
	foreach ($topic['post'] as $post) {
		echo '<li>' . $post['body'] . '</li>';
	}
	echo '</ul>';
}
