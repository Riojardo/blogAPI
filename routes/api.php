<?php

require_once ('C:\wamp64\www\blogAPI\controllers\indexControllers.php');

$routes = [
    'GET' => [
        '/posts' => fn() => (new PostsController())->get_all_post(),
        '/posts/(\d+)' => function ($matches) {
            $id = $matches[1] ?? null;
            if ($id !== null) {
                (new PostsController())->get_posts_by_ID($id);
            } else {
                http_response_code(404);
                echo '404 Not Found';
            }
        },
    ],
    'POST' => [
        '/new' => fn() => (new PostsController())->add_post(),
    ],
    'PUT' => [
        '/update' => function ($matches) {
            $id = $matches[1] ?? null;
            if ($id !== null) {
                parse_str(file_get_contents('php://input'), $_PUT);
                $title = $_PUT['title'] ?? null;
                $body = $_PUT['body'] ?? null;
                $author = $_PUT['author'] ?? null;
                (new PostsController())->update_post($title, $body, $author);
            } else {
                http_response_code(404);
                echo '404 Not Found';
            }
        },
    ],
    'DELETE' => [
        '/delete' => fn() => 
            (new PostsController())->delete_post(),
       
    ],
];

$httpMethod = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];
$route = null;

foreach ($routes[$httpMethod] as $pattern => $handler) {
    if (preg_match("~^$pattern$~", $path, $matches)) {
        $route = $handler;
        break;
    }
}

if ($route !== null) {
    $route($matches);

} else {
    http_response_code(404);
    echo '404 Nhjhjhjhjot Found';
    echo $route . "router" ;
    echo $pattern . "pattern" ;
    echo  $path . "path" ;
}

