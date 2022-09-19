<?php
include 'utils/functions.php';

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $post = getPostById($postId);
} else {
    $post = [
        'title' => 'Article erreur 404',
        'author' => 'Trevor Bayne',
        'text' => 'Vous n\'avez pas demandé d\'article !',
        'category' => 'work',
        'datetimePub' => '2018-10-25',
        'datetimeText' => '25 octobre 2018',
        'avatar' => 'icon-tre.png'
    ];
}

include __DIR__ . '/inc/article.tpl.php';