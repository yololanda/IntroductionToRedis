<?php

require "predis/autoload.php";
Predis\Autoloader::register();

try{
        /*
         *
         * host -> ipaddress from the computer / apache2 ip
         * port -> from 'redis-server' command
         * presistent 1 -> true
         *
         */
		$redis = new Predis\Client(array(
		        "scheme"    => "tcp",
                "host"      => "127.0.1.1",
                "port"      => "6379",
                "persistent"=> "1"));

		echo "connected";


    $redis->set('text','Hello redis');

//get
    $value = $redis->get('text');
    var_dump($value);


	}catch(Exception $e){

		die($e->getMessage());

	}

//set
//;message as key
//;Hello redis as value
/*$redis->set('text','Helloredis');

//get
$value = $redis->get('text');
var_dump($value);*/
/*//output
echo $value;

//echo $redis->exists('message') ? "there is input" : "there is no output";
echo ($redis->exists('message')) ? "Yeah" : "need message key";*/
?>
