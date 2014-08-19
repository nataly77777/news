<?php
include __DIR__."db.php";

$home='news';
function getRoute(){
	if(!isset $_GET['r']){
		return $home;
	}
	return $_GET['r'];
}

function getId($id, $default=''){
	if($_GET[$id]){
		return $_GET[$id];
	}
	else{
		return $default;
	}
}

if(getRoure()=='news'){
	showNews($dbh);
}
if(getRoute()=='oneNews'){
	showOneNews($dbh);
}
if(getRoute()=='authors'){
	showAuthor();
}

function showNews($dbh){

$STH=$dbh->query("SELECT 'id', 'publish_date', 'title', 'text' from 'news'");
$STH->setFetchMode(PDO::FETCH_ASSOC);

include __DIR__."news.php";
}

function showOneNews($dbh){
$id=getId('id');

$STH=$dbh->query("SELECT 'id', 'publish_date', 'title', 'text', 'author_id' from 'news'");
$STH->setFetchMode(PDO::FETCH_ASSOC);

$STH=$dbh->query("SELECT 'id', 'name' from 'authors'");
$STH->setFetchMode(PDO::FETCH_ASSOC);

include __DIR__."onenews.php";
}

function($dbh){
$idAuthor=getId('id');
// из соответствующей базы вытягиваются данные автора и подключается соответствующий файл для их отображения
include __DIR__."author.php";
}
