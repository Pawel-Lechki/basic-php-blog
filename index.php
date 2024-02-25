<?php

$connection = new PDO("sqlite:" . __DIR__ ."/flat.db");

$result = $connection->query('SELECT id, title FROM post');

$posts = [];

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $posts[] = $row;
}

$connection = null;

require __DIR__ . '/templates/list.php';
