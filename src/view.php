<h1>Articles</h1>

<?php
foreach ($articles as $article) {
?>

<article>
<h2><?php echo($article['title']); ?></h2>
<div><?php echo($article['body']); ?></div>
</article>

<?php
}
?>
