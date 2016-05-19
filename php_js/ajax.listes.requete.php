<?php

if (isset($_GET['id']))
{
    try { 
        $id = $_GET['id'];
        $connect = new PDO('mysql:host=localhost;dbname=syfonydb','root','', array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ));
        
        $sql= "select cat_article.id, cat_article.titre from cat_article_cat_categorie LEFT JOIN cat_article"
                 . " ON cat_article.id = cat_article_cat_categorie.article_id"
                 . " where categorie_id = ".$id;
        
        $r = $connect->query($sql);
        $liste = $r->fetchAll();
        
    } catch (Exception $ex) {
        $liste = $ex->getMessage();
        $ok =false;
    }
    
    echo json_encode($liste);
}