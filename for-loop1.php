<?php

//for (initiator;condition;increment)

$total_items = 210;
$items_per_page = 9;

//ceil() -> round up
$page_count = ceil($total_items / $items_per_page);

for ($i = 1; $i <= $page_count ; $i++) {
	echo "<a href='?pages=" . $i . "'>" . $i .  "</a> ";
}

