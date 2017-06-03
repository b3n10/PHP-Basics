<?php

//$_POST and $_GET are superglobal arrays
//both array receive queries from a page (HTML form for POST), but only $_GET shows those queries on the URL
echo '<pre>', var_dump($_GET), '</pre>';
