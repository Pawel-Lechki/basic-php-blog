<?php

require_once __DIR__ . '/model.php';

$posts = get_all_posts();

require __DIR__ . '/templates/list.php';
