<?php

namespace site;

require_once("database.php");

class News extends database
{
    public int $id;
    public string $url;
    public string $title;
    public string $image;
    public string $description;
    public string $content;
    public $publish;
    public $date;
    public $data = [];

    public function selectAll()
    {
        $this->data = $this->getRows("select * from news where publish");
    }
}