<?php
/**
 * Created by PhpStorm.
 * User: ncourtois
 * Date: 02/05/2016
 * Time: 17:10
 */
    // Return all articles
    function getArticles() {
        $bdd = new PDO('mysql:host=localhost;dbname=microcms;charset=utf8', 'microcms_user', 'secret');
        $articles = $bdd->query('select * from t_article order by art_id desc');
        return $articles;
    }