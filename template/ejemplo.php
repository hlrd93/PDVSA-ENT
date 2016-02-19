<? php

$url = "// direccion del archivo xml";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);    // obtener los contenidos de la url

$data = curl_exec($ch);  // ejecutar curl requerido
curl_close($ch);

$xml = simplexml_load_string($data);

$con=mysql_connect()  // connect to server 
mysql_select_db("new_xml_extract", $con) or die (mysql_error()); // select database

foreach ($xml -> item as $row) {

	$title = $row -> title;
	$destinacion = $row -> destinacion;
	$price = $row -> price;

	//performing sql query 


$sql = "INSERT INTO 'test_xml' ('title' , 'destinacion', 'price')" 
			. "VALUES ('$title' , '$destinacion' , '$price')";

$result = mysql_query($qrl);
if (!$result) {
	echo 'MySQL ERROR';
              } 
else{
	echo "SUCCES";
    }
                              }
?>                         
<?php
 class db_link {
  
  private $link;
  
  public function __construct ($database_name) {
   $link = mysql_connect ("localhost", "your_user_name", "your_password");
   mysql_select_db ($database_name, $link);
   $this -> link = $link;
   }
  
  function query ($sql_query) {
   $result = mysql_query ($sql_query, $this -> link);
   return $result;
   }
  
  function __destruct() {
   mysql_close ($this -> link);
   }
  }
 
 $db = new db_link ("MyDB");
 $result = $db->query ("Select * from MyTable");
 ?>