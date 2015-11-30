<?php
class Model{
	public function lighting($access) {
	$xml_file = simplexml_load_file($access); 
	return $xml_file;
	}
}
?>