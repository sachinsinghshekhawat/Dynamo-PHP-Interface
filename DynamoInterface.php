<?php

	require dirname(__FILE__). '/vendor/autoload.php';
	use Aws\DynamoDb\DynamoDbClient;

	class DynamoInterface{

		var $client;
	
		function __construct() {
			// Instantiate the client.
			$this->client = DynamoDbClient::factory(array(
					'credentials' => array(
				        'key'    => '****************',
				        'secret' => '*******************************',
				    ),
					'region' => 'us-east-1',
					'version'=>'latest'
			));
		}


		public function putItem($dataObject){
			return $this->client->putItem($dataObject);
		}
		
		public function updateItem($dataObject){
			return $this->client->updateItem($dataObject);
		}
		public function getItem($dataObject){
			return $this->client->getItem($dataObject);
		}
		
		public function queryItem($dataObject){
			return $this->client->query($dataObject);
		}
		

		public function scan($dataObject){
			return $this->client->scan($dataObject);
		}
		
		public function getScanIterator($dataObject){
			return $this->client->getScanIterator($dataObject);
		}

	}