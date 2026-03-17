<?php
require_once "database/connection.php";

function getAllArticles(){
    $pdo =connectDB();
    $sql = "SELECT * FROM articles";
    $stm = $pdo->query($sql);
    $all = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $all;
}

function addArticle($title, $text, $time, $removetime, $section, $userid){
    $pdo =connectDB();
    $data = [$title, $text, $time, $removetime, $section, $userid];
    $sql = "INSERT INTO articles (title, text, created, expirydate, section, userid) VALUES(?,?,?,?,?,?)";
    $stm=$pdo->prepare($sql);
    return $stm->execute($data);
}

function getArticleById($id){
    $pdo = connectDB();
    $sql = "SELECT * FROM articles WHERE articleid=?";
    $stm= $pdo->prepare($sql);
    $stm->execute([$id]);
    $all = $stm->fetch(PDO::FETCH_ASSOC);
    return $all;
}

function deleteArticle($id){
    $pdo = connectDB();
    $sql = "DELETE FROM articles WHERE articleid=?";
    $stm=$pdo->prepare($sql);
    return $stm->execute([$id]);
}

function updateArticle($title, $text, $time, $removetime, $section, $articleid){
    $pdo = connectDB();
    $data = [$title, $text, $time, $removetime, $section, $articleid];
    $sql = "UPDATE articles SET title = ?, text = ?, created = ?, expirydate = ?, section = ? WHERE articleid = ?";
    $stm = $pdo->prepare($sql);
    return $stm->execute($data);
}

function getSectionArticles($section){
    $pdo =connectDB();
    $sql = "SELECT * FROM articles WHERE section = ?";
    $stm=$pdo->prepare($sql);
    $stm->execute(array($section));
    $all = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $all;
} 