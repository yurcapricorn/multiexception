<?php

$article = new \Multiexception\tests\Article();
$article->fill(['id' => 1, 'title' => 'title']);
var_dump($article);