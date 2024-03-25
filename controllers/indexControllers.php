<?php
require_once(__DIR__ . '..\postsController.php');
function sendJson($data)
{
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    exit();
}

