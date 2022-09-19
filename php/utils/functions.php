<?php
function getPostById($postId)
{
    include __DIR__ . '/../data/data.php';

    if (isset($posts[$postId])) {
        $post = $posts[$postId];
    } else {
        $post = [
            'title' => 'Article erreur 404',
            'author' => 'Trevor Bayne',
            'text' => 'L\'article demandé n\'existe pas !',
            'category' => 'work',
            'datetimePub' => '2018-10-25',
            'datetimeText' => '25 octobre 2018',
            'avatar' => 'icon-tre.png'
        ];
    }
    return $post;
}