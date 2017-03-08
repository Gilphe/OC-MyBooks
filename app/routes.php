<?php

// Home page
$app->get('/', function () use ($app) {
    $articles = $app['dao.book']->findAll();
    return $app['twig']->render('index.html.twig', array('books' => $articles));
});