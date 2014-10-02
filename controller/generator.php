<?php
error_reporting(-1);
ini_set('display_errors', 'On');

              
	//$password="hello-world!";

	$filename="controller/wordlist.txt";
	$words=file($filename);
	shuffle($words);
	echo $_GET["number_of_words"]."<br>";
	$password=trim($words[0]);//."-".$words[1]; //start the first word
	for($i=1; $i<$_GET["number_of_words"]; $i++)
	{
		$password.="-".trim($words[$i]);
	}
	
	echo $password;
?>