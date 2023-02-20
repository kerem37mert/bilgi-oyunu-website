<?php
require_once("header.php");

//News
require_once("php/News.php");
$news = new \site\News();
$news->selectAll();
$data = $news->data;
?>
    <main>
        <section class="news-section">
            <?php foreach($data as $item): ?>
            <article class="news-article">
                <img src="<?php echo $item["image"]; ?>" alt="">
                <h2>
                    <a href="#<?php echo $item["url"]; ?>"><?php echo $item["title"]; ?></a>
                </h2>
            </article>
            <?php endforeach; ?>
        </section>
    </main>
<?php require_once("footer.php");