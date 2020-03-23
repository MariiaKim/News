<?php
session_start();
include_once 'inc/database.php'; 
require 'model/Category.php'; 
require 'model/News.php';
require 'model/Comments.php';//--------MVC2

include_once 'view/news.php'; 
include_once 'view/comments.php';//---------MVC2

include_once 'controller/Controller.php';
include_once 'route/routing.php';

echo $response;
?>