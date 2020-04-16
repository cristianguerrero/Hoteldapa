<?php
return[
'adminEmail' => 'vladimir.bello@talentsw.com',
'title' => 'Aplicación Yii',
'salt' => 'fsddsflj38343lj0',

//Conexión
'usuario' => 'HOTELDAPA',
'password' => 'HOTELDAPA2020',
'hotel' => '(DESCRIPTION=
			    (ADDRESS=
			      (PROTOCOL=TCP)
			      (HOST=localhost)
			      (PORT=1521)
			    )
			    (CONNECT_DATA=
			      (SERVER=dedicated)
			      (SID=orcl)
			    )
	  		)'

];

// $conn->Connect($dsn,$user,$pass);
// 	   $conn->SetFetchMode(ADODB_FETCH_ASSOC);
	   
// 	   if($conn->isConnected()){
// 	   	$is_connect=true;
// 	   	echo "<script language='javascript'>
// 	   			console.log('Hola')</script>";
// 	   }else{ 
// 	   	$is_connect=false;
// 	   	echo "<script language='javascript'>
// 	   			console.log('Bye')</script>";
// 	   }
// 	   $config = $conn;