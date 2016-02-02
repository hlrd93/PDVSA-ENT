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