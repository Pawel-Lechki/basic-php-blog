<?php

require_once __DIR__ . '/model.php';

$post = get_post($_REQUEST['id']);

require __DIR__ . '/templates/show.html.php';
