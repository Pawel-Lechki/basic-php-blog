<?php
require __DIR__ . '/controllers.php';
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\Response;

require_once __DIR__ . '/vendor/autoload.php';

$request = Request::createFromGlobals();

$uri = $request->getPathInfo();
if($uri === '/') {
    $response = list_action();
} elseif ($uri == '/show' && $request->query->has('id')) {
    $response = show_action($request->query->get('id'));
} else {
    $html = '<html><body><h1>Page Not Found</h1></body></html>';
    $response = new Response($html, Response::HTTP_NOT_FOUND);
}

$response->send();