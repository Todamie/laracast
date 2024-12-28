<?php

require 'functions.php';
//require 'router.php';

//connect to db

$dsn = "mysql:host=localhost:3306; dbname=phpcourse; sharset=utf8mb4";

$pdo = new PDO($dsn, 'root', 'todami1');

$statement = $pdo->prepare("SELECT * FROM posts;");

$statement -> execute();

$posts = $statement ->fetchAll(PDO::FETCH_ASSOC);


echo '<ol>';
foreach ($posts as $post){
    
    echo '<li>' . $post['title'] . '</li>';

}
echo '</ol>';
