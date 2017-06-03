<?php

//both array receive queries from a page (HTML form for POST), but only $_GET shows those queries on the URL
echo '<h1>Your username is ' . $_POST['username'] . '</h1>';
echo '<p>And your password is ' . $_POST['password'] . '</p>';
