<?php
require_once("header.php");

//News Content
require_once("php/News.php");
$news = new \site\News();
$url = htmlspecialchars($_GET["url"]);
if(empty($url)):
    header("location:/404");
    exit;
else:
    $news->select($url);
    $data = $news->data;
    if(count((array) $data) <= 1):
        header("location:/404");
        exit;
    endif;
endif;


//News Content End
$date = explode(" ", $data["date"]);
$date = explode("-", $date[0]);
$year = $date[0];
$month = $date[1];
$day = $date[2];
//Date Explode
?>
    <section class="content-section">
        <article class="content-article">
            <div class="content-header">
                <h2><?php echo $data["title"]; ?></h2>
                <span><?php echo $day." ".$month." ".$year; ?></span>
            </div>
            <hr>
            <p><?php echo $data["content"]; ?></p>
        </article>
    </section>
<?php require_once("footer.php");
