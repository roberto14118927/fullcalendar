<?php
    $connection = mysqli_connect('localhost', 'root', '', 'cabanadb');
	$sth = mysqli_query($connection,"SELECT * FROM calendario_tbl");
	$rows = array();
	 /*foreach ($sth as $event) {
	 	 $eventsJson[] = array(
                'id' => $event->id_admin,
                'start' => $event->cmp_fecha
            );
	 }
	 print json_encode($eventsJson);*/

	while($r = mysqli_fetch_assoc($sth)) {
	    //$id = $r['id_admin'];
	    $cmp_fecha = $r['cmp_fecha'];
	    $cmp_fecha = substr($cmp_fecha, 0, 10);
	    $title = $r['precio'];

	     $values[] = array(
	     'title' => $title,
         'start' => $cmp_fecha,
    );
	}
	//print(json_encode($values));
	echo json_encode($values);
	//$json = json_encode($rows);
	//define('data', DIRECTORY_SEPARATOR);
	
	//$json= file_get_contents(json_encode($rows)); 
	
	/*if(!defined('da')) define('da', DIRECTORY_SEPARATOR);
	$da = json_decode($json);
	print(da);*/
	//echo json_encode($rows);
?>