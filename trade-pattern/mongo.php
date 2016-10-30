<?php
//composer require "mongodb/mongodb=^1.0.0" <-- at command line
//Registry
//Factory
require "vendor/autoload.php";
$m = new MongoDB\Client();
$db = $m->selectDatabase("test");
$collection = $db->cartoons;
$document = array("title" => "Calvin and Hobes", "author" => "Bill Watterson" );
$collection->insertOne($document);
$document = array( "title" =>"XKCD", "online" => true);
$collection->insertOne($document);
$cursor = $collection->find();
foreach ($cursor as $document) {
	echo $document["title"] . "<br>";
}