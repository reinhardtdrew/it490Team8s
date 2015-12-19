
#!/usr/bin/php
<?php
$connection = new MongoClient( "mongodb://cae8:%7824NJITmon@ds039504.mongolab.com:39504/carlos_ecu" );
$mongodb = $connection->selectDB('sys_integration');
$collection = new MongoCollection($mongodb,'log');
var_dump($connection);
var_dump($collection);

$cursor = $collection->find(array("username"=>"cae8"));
echo "find results:\n";
foreach ($cursor as $doc)
{
  var_dump($doc);
}
?>