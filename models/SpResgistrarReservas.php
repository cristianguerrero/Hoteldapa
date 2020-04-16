<?php 

	namespace app\models;
	use Yii;
	use yii\db\ActiveRecord;
	use yii\db\Command;
	use PDO;
	use yii\base\Model;

	Class SpResgistrarReservas extends Model{		

		public function registrar($c1,$c2,$c3,$c4){
			//$c1: codigo del cliente
			//$c2: nombre completo del clinete
			//$c3: direccion del cliente
			//$c4: correo electronico del cliente

			//$c7: codigo que indicia el estado de la ejecucion
				//O: CLIENTE YA SE ENCUENTRA REGISTRADO EN LA BASE DE DATOS 
				//1: REGISTRO COMPLETADO
				//2: REGISTRO ERRONEO
			//
			//dsn de la conexion a la base de datos			
			$db = Yii::$app->params['hotel'];		
			$usuario = Yii::$app->params['usuario'];
			$contrasena = Yii::$app->params['password'];
			//establece la conexion con la bese de dato HOTEL
			$conexion = oci_connect($usuario, $contrasena, $db);						
			//se hace el llamado al procedimietno que trae la informacion de las reservas
			$stid = oci_parse($conexion,"BEGIN SP_HOTELDAPA_REGISTRAR_RESERVA(:c1,:c2,:c3,:c4,:c5,:c7); END;");			
			//pasa los parametros del proceimiento
			oci_bind_by_name($stid, ":c1", $c1, 11);
			oci_bind_by_name($stid, ":c2", $c2, 60);
			oci_bind_by_name($stid, ":c3", $c3, 75);
			oci_bind_by_name($stid, ":c4", $c4, 30);
			oci_bind_by_name($stid, ":c5", $c5, 15);
			// oci_bind_by_name($stid, ":c6", $c6, 75);
			oci_bind_by_name($stid, ":c7", $c7, 10);
			// se ejecuta el procedimiento 
			oci_execute($stid);		

			return $c7;
		}		

	}
