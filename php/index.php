<?php
include 'inc/header.tpl.php';
include 'data/data.php';

?>

<h2 class="right__title">Latest News</h2>

<div class="posts">

  <?php foreach ($posts as $postId => $post) : ?>
    <article class="post">
      <a href="" class="post__category post__category--color-<?= $post['category'] ?>"><?= $post['category'] ?></a>
      <h3><?= $post['title'] ?></h3>
      <div class="post__meta">
        <img class="post__author-icon" src="../images/<?= $post['avatar'] ?>" alt="">
        <strong class="post__author"><?= $post['author'] ?></strong>
        <time datetime="<?= $post['datetimePub'] ?>">le <?= $post['datetimeText'] ?></time>
      </div>
      <p>
        <?= substr($post['text'], 0, 100) ?>...
      </p>
      <a href="./article.php?id=<?= $postId ?>" class="post__link">Continue reading</a>
    </article>
  <?php endforeach ?>

</div>

<?php
include_once 'inc/footer.tpl.php';
?>