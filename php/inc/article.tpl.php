<?php
include 'inc/header.tpl.php';
?>

<h2 class="right__title">Page article</h2>
<article class="post post--solo">
    <a href="" class="post__category post__category--color-<?= $post['category'] ?>"><?= $post['category'] ?></a>
    <h3><?= $post['title'] ?></h3>
    <div class="post__meta">
        <img class="post__author-icon" src="../images/<?= $post['avatar'] ?>" alt="">
        <strong class="post__author"><?= $post['author'] ?></strong>
        <time datetime="<?= $post['datetimePub'] ?>">le <?= $post['datetimeText'] ?></time>
    </div>
    <p>
        <?= $post['text'] ?>
    </p>
    <a href="./index.php" class="post__link">Back to home</a>
</article>

<?php
include 'inc/footer.tpl.php';
?>