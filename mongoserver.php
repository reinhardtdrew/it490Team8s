#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
function getData()
{
	try
	{
		$connection = new Mongo("mongodb://cae8:%7824NJITmon@ds039504.mongolab.com:39504/carlos_ecu");
		$database   = $connection->selectDB('IT490');
    		$collection = $database->selectCollection('IT490');
    		var_dump($connection);
    		var_dump($collection);
	}
	catch(MongoConnectionException $e)
	{
    		die("Failed to connect to database ".$e->getMessage());
	}
	$cursor = $collection->find();
	echo "find results:\n";
	$returnArray = array();
	foreach ($cursor as $doc)
	{
  		var_dump($doc);
		array_push($returnArray, $doc);
	}
	return $returnArray;
}
function requestProcessor($request)
{
  echo "received request".PHP_EOL;
  var_dump($request);
  if(!isset($request['type']))
  {
    return "ERROR: unsupported message type";
  }
  switch ($request['type'])
  {
    case "getData":
        $information = getData();
	return $information;
  }
  //return array("returnCode" => '0', 'message'=>"Server received request and processed");
}
$server = new rabbitMQServer("RabbitMQ.ini","team8sServer");
$server->process_requests('requestProcessor');
exit();
?>
